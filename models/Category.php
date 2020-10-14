<?php
class Category
{
    public static function getCategoryList()
    {
        $db = Db::getConnection();
        $categoryList = array();

        $result = $db->query('SELECT id, name FROM category '
            . 'WHERE status="1" '
            . 'ORDER BY sort_order ASC');

        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $i++;
        }

        return $categoryList;
    }
    /**
     * Возвращает товар по указанному ID
     */
    public static function getCategoryById($id)
    {
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM category WHERE id = ' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }
    /**
     * Возвращает массив категорий для панели админа
     */
    public static function getCategoryListAdmin()
    {
        $db = Db::getConnection();
        $categoryList = array();
        $sql = $db->query('SELECT id, name, status, sort_order FROM category ORDER BY sort_order');
        $i = 0;
        while ($row = $sql->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['sort_order'] = $row['sort_order'];
            $categoryList[$i]['status'] = $row['status'];
            $i++;
        }
        return $categoryList;
    }

    public static function  deleteCategoryById($id)
    {
        $db = Db::getConnection();

        $sql = 'DELETE FROM category WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
    /**
     * Редактирует категорию с заданным id
     * @param $id Id товара.
     * @param array $options Массив с информацие о товаре.
     * @return boolean Результат выполнения. 
     */
    public static function updateCategoryById($id, $options)
    {
        //Подключаемся к БД
        $db = Db::getConnection();
        //Формируем запрос
        $sql = "UPDATE category
    SET
       name = :name,
       sort_order = :sort_order,
       status = :status
   WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':sort_order', $options['sort_order'], PDO::PARAM_INT);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        $result->execute();
    }

    public static function createCategory($options)
    {
        //Подключаемся к БД
        $db = Db::getConnection();   

        $sql = 'INSERT INTO category (name, sort_order, status) '
        .'VALUES '
        .'(:name, :sort_order, :status)';
       
        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':sort_order', $options['sort_order'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_STR);

        if ($result->execute()) {
            return $db->lastInsertId();
        } else return $sql;
    }
}
