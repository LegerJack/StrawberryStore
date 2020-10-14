<?php
include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/AdminBase.php';
include_once ROOT . '/models/Product.php';
/**
 * Контроллер AdminProductController
 * отвечает за управление товаром в админ-панели
 */
class AdminProductController extends AdminBase
{

    public function actionIndex()
    {
        //Проверка администратора
        self::checkAdmin();

        //Получаем список тоавров
        $productList = Product::getProductsList();

        //Вид странинцы
        require_once(ROOT . '/views/administrator/Product/adminProduct.php');
        return true;
    }

    public function actionDelete($id)
    {
        self::checkAdmin();

        $product = Product::getProductById($id);
        //Обработка формы
        if (isset($_POST['submit'])) {
            //Если форма отправлена
            //удаляем товар
            Product::deleteProductById($id);
            //Перенаправляем пользователя на страницу управления товарами
            header("Location: /admin/product");
        }

        require_once(ROOT . '/views/administrator/Product/deleteProduct.php');
        return $product;
    }

    public function actionCreate()
    {
        //Проверка администратора
        self::checkAdmin();

        //Получаем список категорий для выпадающего списка
        $categorysList = Category::getCategoryListAdmin();
        //Оюработка формы
        if (isset($_POST['submit'])) {
            //Если форма отправлена
            //Получаем данные из формы
            $options['id'] = $_POST['id'];
            $options['name'] = $_POST['name'];
            $options['category_id'] = $_POST['category_id'];
            $options['code'] = $_POST['code'];
            $options['price'] = $_POST['price'];
            $options['discription'] = $_POST['discription'];
            $options['is_new'] = $_POST['is_new'];
            $options['is_recommended'] = $_POST['is_recommended'];
            $options['status'] = $_POST['status'];
            $options['is_hot'] = $_POST['is_hot'];


                //если ошибок нет, то добавляем новый товар
                $id = Product::createProduct($options);
                echo($id);
                //Если запись добавлена
                // if ($id) {
                //     //Проверка на добавление изображения
                //     if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                //         //если загружалось, переносим его в нужную папку и даем новое имя
                //         move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images");
                //     }
                // };

                //  header("Location: /admin/product");
        }
        //Вид страницы
        require_once(ROOT . '/views/administrator/Product/createProduct.php');
        return true;
    }

    public function actionUpdate($id){
         //Проверка администратора
         self::checkAdmin();

        //Получаем список категорий для выпадающего списка
        $categorysList = Category::getCategoryListAdmin();

        //Получаем данные с конкретного товара
        $product = Product::getProductById($id);

        if(isset($_POST['submit'])) {
             //Если форма отправлена
            //Получаем данные из формы
            $options['name'] = $_POST['name'];
            $options['category_id'] = $_POST['category_id'];
            $options['code'] = $_POST['code'];
            $options['price'] = $_POST['price'];
            $options['discription'] = $_POST['discription'];
            $options['is_new'] = $_POST['is_new'];
            $options['is_recommended'] = $_POST['is_recommended'];
            $options['status'] = $_POST['status'];
            $options['is_hot'] = $_POST['is_hot'];

            if (Product::updateProductById($id, $options)) {
                // if (is_uploaded_file($_FILES["image"]["tmp_name"])){
                //     move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/image");
                // }

            };

            header("Location: /admin/product");
        }


        require_once(ROOT. '/views/administrator/Product/updateProduct.php');
        return true;
    }
}
