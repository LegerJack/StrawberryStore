<?php

class Product{

    const SHOW_BY_DEFAULT= 16;
    /**
     * Ограниченный список продуктов 
     */
    public static function getProducts($count = self::SHOW_BY_DEFAULT){
        $count = intval($count);

        $db = Db::getConnection();

        $products = array();

        $result = $db->query('SELECT id, name, price, image, is_new From product '
        .' WHERE status = "1"'
        .' ORDER BY id DESC '
        .' LIMIT '. $count);

        $i = 0;
            while($row = $result->fetch()){
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['image'] = $row['image'];
                $products[$i]['is_new'] = $row['is_new'];
                $i++;
            }
        return $products;
    }
    /**
     * Возвращает массив продкутов в выбранной категории
     */
    public static function getProductListByCategory($categoryId = false, $page=1){
        if($categoryId){
            $page = intval($page);
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

            $db = Db::getConnection();
            $products = array();

            $result = $db->query("SELECT id, name, price, image, is_new FROM product "
            ." WHERE status = '1' AND category_id = '$categoryId'" 
            ." ORDER BY id DESC"
            ." LIMIT ".self::SHOW_BY_DEFAULT
            ." OFFSET ".$offset);

            $i = 0;
            while($row = $result->fetch()){
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['image'] = $row['image'];
                $products[$i]['is_new'] = $row['is_new'];
                $i++;
            }

            return $products;
        }
      
    } 
    /**
     * Возвращает сумму всех продуктов находящихся в корзине
     */
     public static function getTotalProducts($categoryId){
         $db = Db::getConnection();

         $result = $db-> query('SELECT count(id) AS count FROM product '
         .' WHERE status = "1" AND category_id ="'.$categoryId.'"');
         $result->setFetchMode(PDO::FETCH_ASSOC);
         $row = $result->fetch();

         return $row['count'];
     }
     /**
      * Возвращает товар по указанному ID
      */
     public static function getProductById($id){
         $id = intval($id);

         if($id){
             $db = Db::getConnection();

             $result = $db->query('SELECT * FROM product WHERE id = '. $id);
             $result->setFetchMode(PDO::FETCH_ASSOC);

             return $result->fetch();
         }
     }
     /**
      * Возвращает полную информацию из БД, из переданного массива с ID товарами
      */
     public static function getProductsByIds($idsArray){
         $products = array();

         $db = Db::getConnection();

         $idString = implode(',', $idsArray);

         $sql = "SELECT * FROM product WHERE status ='1' AND id IN ($idString)";

         $result = $db->query($sql);
         $result->setFetchMode(PDO::FETCH_ASSOC);

         $i = 0;   
         while($row = $result->fetch()){
            $products[$i]['id'] = $row['id'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['code'] = $row['code'];
            $products[$i]['price'] = $row['price'];
            $i++;
         }

         return $products;
     }
     /**
      * Возвращает список рекомендуемых товаров
      * @return array Массив с товарами
      */
     public static function getRecomendedProducts(){
         $db = Db::getConnection();

         $result = $db->query('SELECT id, name, price, is_new FROM product '
         .' WHERE status="1" AND is_recommended ="1" '
         .' ORDER BY id DESC');

         $i = 0;
         $productsList = array();
         while ($row = $result->fetch()){
             $productsList[$i]['id'] = $row['id'];
             $productsList[$i]['name'] = $row['name'];
             $productsList[$i]['price'] = $row['price'];
             $productsList[$i]['is_new'] = $row['is_new'];
             $i++;
         }
         return $productsList;
     }
     /**
      * Возвращает список хит товаров
      * @return array Массив с товарами
      */
     public static function getHotProducts(){
        $db = Db::getConnection();

        $result = $db->query('SELECT id, name, price, is_new FROM product '
        .' WHERE status="1" AND is_hot ="1" '
        .' ORDER BY id DESC');

        $i = 0;
        $productsList = array();
        while ($row = $result->fetch()){
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        return $productsList;
    }

     /**
      * Возвращает список все товаров
      * находящихся в Базе Данных
      * @return array Массив с товарами
      */
    public static function getProductsList(){
        $db = Db::getConnection();

        $products = array();

        $result = $db->query('SELECT id, name, code, price, image, is_new, is_recommended, is_hot, status From product '
        .' WHERE status = "1"'
        .' ORDER BY id DESC ');

        $i = 0;
            while($row = $result->fetch()){
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['code'] = $row['code'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['image'] = $row['image'];
                $products[$i]['is_new'] = $row['is_new'];
                $products[$i]['is_recommended'] = $row['is_recommended'];
                $products[$i]['is_hot'] = $row['is_hot'];
                $products[$i]['status'] = $row['status'];
                $i++;
            }
        return $products;
    }
/**
 * Удаляет товар с уазанным id
 * @param integer $id id товара
 * @return boolean Результат выполнения метода
 */
    public static function deleteProductById($id){
        //Подключаемся к БД
        $db = Db::getConnection();
        //Формируем запрос
        $sql = 'DELETE FROM product WHERE id = :id';
        //Подготавливаем запрос к выполнению
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
/**
 * Редактирует товар с заданным id
 * @param $id Id товара.
 * @param array $options Массив с информацие о товаре.
 * @return boolean Результат выполнения. 
 */
    public static function updateProductById($id, $options){
         //Подключаемся к БД
         $db = Db::getConnection();
         //Формируем запрос
         $sql = "UPDATE product
         SET
            name = :name,
            category_id = :category_id,
            code = :code,
            price = :price,
            discription = :discription,
            is_new = :is_new,
            is_recommended = :is_recommended,
            status = :status,
            is_hot = :is_hot
        WHERE id = :id";
        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':code', $options['code'], PDO::PARAM_INT);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':discription', $options['discription'], PDO::PARAM_STR);
        $result->bindParam(':is_new', $options['is_new'], PDO::PARAM_INT);
        $result->bindParam(':is_recommended', $options['is_recommended'], PDO::PARAM_INT);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        $result->bindParam(':is_hot', $options['is_hot'], PDO::PARAM_INT);
        $result->execute();
    }
/**
 * добавляет новый товар в БД
 * @param array $options Массив с информацией о товаре
 * @return integer Id добавленный в таблицу записи
 */
    public static function createProduct($options){
        //Подключаемся к БД
        $db = Db::getConnection();

        $sql = 'INSERT INTO product(name, category_id, code, price, '
         .'discription, is_new, is_recommended, status, is_hot) '
         .'VALUES'
         .'(:name, :category_id, :code, :price, '
         .':discription, :is_new, :is_recommended, :status, :is_hot)';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':code', $options['code'], PDO::PARAM_INT);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':discription', $options['discription'], PDO::PARAM_STR);
        $result->bindParam(':is_new', $options['is_new'], PDO::PARAM_INT);
        $result->bindParam(':is_recommended', $options['is_recommended'], PDO::PARAM_INT);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        $result->bindParam(':is_hot', $options['is_hot'], PDO::PARAM_INT);
        if($result->execute()){
            return $db->lastInsertId();
        }
        else return $result->execute();
    }
}