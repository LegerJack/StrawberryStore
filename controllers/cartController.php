<?
include_once ROOT . '/models/Product.php';
include_once ROOT . '/models/Cart.php';
include_once ROOT . '/models/User.php';
include_once ROOT . '/models/Order.php';
class CartController
{
    public function actionAdd($id)
    {
        //Добавление товара в корзину
        Cart::addProduct($id);
        //Возврат пользователя на страницу
        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");
    }

    public function actionAddAjax($id)
    {
        echo Cart::addProduct($id);
        return true;
    }

    public function actionIndex()
    {
        $productsInCart = false;

        //получение данных из корзины
        $productsInCart = Cart::getProducts();

        if ($productsInCart) {
            //Получаем полную информацию товара из списка
            $productsIds = array_keys($productsInCart);
            $products = Product::getProductsByIds($productsIds);

            //Получаем общую стоимость товаров
            $totalPrice = Cart::getTotalPrice($products);
        }

        require_once(ROOT . '/views/cart/index.php');

        return true;
    }

    public function actionCheckout()
    {
        //Статус успешного оформления заказа
        $result = false;

        if (isset($_POST['submit'])) {
            //Если форма отправлена
            //Считываем данные формы
            $userName = $_POST['userName'];
            $userTel = $_POST['userTel'];
            $userComment = $_POST['userComment'];

            //Валидация полей
            $errors = false;
            if (!User::checkName($userName))
                $errors[] = 'Неправильное имя';
            if (!User::checkTel($userTel))
                $errors[] = 'Неправильный номер телефона';

            //Проверка корректного заполнения формы 
            if ($errors == false) {
                //Если форма заполнена корректно 
                //Сохраняем заказ в базе данных

                //Собираем информацию о заказе 
                $productsInCart = Cart::getProducts();
                if (User::isGuest()) {
                    $userId = false;
                } else {
                    $userId = User::checkLogged();
                }
                //Сохраняем заказ в БД 
                
                $result = Order::Save($userName, $userTel, $userComment, $userId, $productsInCart);
                echo $result ;
                if ($result) {
                    //Оповещаем администратора о новом заказе
                    $adminEmail = 'v.klenov2014@yandex.ru';
                    $message = 'localhost/admin/orders';
                    $subject = 'Новый заказ';
                    mail($adminEmail, $subject, $message);

                    //Очищаем корзину
                    Cart::clear();
                }
            } else {
                //Если форма заполнена НЕ корректно 

                //Подводим итоги
                $productsInCart = Cart::getProducts();
                $productsIds = array_keys($productsInCart);
                $products = Product::getProductsByIds($productsIds);
                $totalPrice = Cart::getTotalPrice($products);
                $totalQuantity = Cart::countItems();
            }
        } else {
            //Если форма НЕ отправлена 
            //Получаем данные из корзины
            $productsInCart = Cart::getProducts();

            //Если в корзине есть товары
            if ($productsInCart == false) {
                //Товаров НЕТ
                //Отправляем пользователдя на главную
                header("Location: /");
            } else {
                //Товары Есть
                //Подводим итоги
                $productsInCart = Cart::getProducts();
                $productsIds = array_keys($productsInCart);
                $products = Product::getProductsByIds($productsIds);
                $totalPrice = Cart::getTotalPrice($products);
                $totalQuantity = Cart::countItems();

                $userName = false;
                $userTel = false;
                $userComment = false;

                //Если пользователь авторизирован
                if (User::isGuest()) {
                    //НЕТ
                    //Тогда формы пустые
                } else {
                    //ДА
                    //Получаем информацию о пользователе из БД по ID
                    $userId = User::checkLogged();
                    $user = User::getUserById($userId);
                    //Подставляем в форму
                    $userName = $user['name'];
                }
            }
        }

        require_once(ROOT . '/views/cart/checkout.php');
        return true;
    }

    public function actionDelete($id)
    {
        Cart::deleteProduct($id);
        header("Location: /cart");
    }
}
