<?php

namespace controllers;

use models\User;

include_once ROOT . '/models/User.php';

class userController
{

    public function actionRegister()
    {
        $name = '';
        $lastname = '';
        $birthDay = '';
        $email = '';
        $password = '';
        $result = false;


        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $birthDay = $_POST['birthday'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $consent = $_POST['consent'];

            $errors = false;

            if (User::checkName($name)) {
            } else {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (User::checkEmail($email)) {
            } else {
                $errors[] = 'Неправильный email';
            }
            if (User::checkPassword($password)) {
            } else {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            if (User::checkBox($consent)) {
            } else {
                $errors[] = 'Подтвердите согласие на обработку данных';
            }
            if (User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
            }
            if ($errors == false) {
                $result = User::register($name, $lastname, $birthDay, $email, $password);
            }
        }
        require_once(ROOT . '/views/user/register.php');

        return true;
    }

    public function actionLogin()
    {
        $email = '';
        $password = '';

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if (User::checkEmail($email)) {
            } else {
                $errors[] = 'Неправильный email';
            }
            if (User::checkPassword($password)) {
            } else {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            //Проверка на существование пользователя
            $userID = User::checkUserData($email, $password);

            if ($userID == false) {
                $errors[] = 'Неверный логин или пароль';
            } else {
                User::auth($userID);

                header("Location: /cabinet/");
            }
        }

        require_once(ROOT . '/views/user/login.php');

        return true;
    }

    public function actionLogout()
    {
        unset($_SESSION["user"]);
        header("Location: /");
    }

}