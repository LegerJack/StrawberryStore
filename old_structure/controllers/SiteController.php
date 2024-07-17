<?php

namespace controllers;

use models\Product;
use models\User;

include_once ROOT . '/models/User.php';
include_once ROOT . '/models/Product.php';

class SiteController
{
    public function actionIndex()
    {

        //Вывод товаров на страницу категории
        $latestProducts = array();
        $latestProducts = Product::getProducts(8);
        //Слайдер рекомендованных продуктов 
        $sliderProducts = Product::getRecomendedProducts();

        $sliderHotProducts = Product::getHotProducts();

        require_once(ROOT . '/views/site/index.php');

        return true;
    }

    public function actionContact()
    {
        $userEmail = '';
        $userText = '';
        $result = false;

        if (isset($_POST['submit'])) {
            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];

            $errors = false;

            if (!User::checkEmail($userEmail)) {
                $errors[] = 'Неправильно указан email';
            }
            if ($errors == false) {
                $adminEmail = 'v.klenov2014@yandex.ru';
                $message = "Текст: {$userText}. От {$userEmail}";
                $subject = 'Тема письма';
                $result = mail($adminEmail, $subject, $message);
                $result = true;
            }
        }
        require_once(ROOT . '/views/site/contact.php');
        return true;
    }
}
