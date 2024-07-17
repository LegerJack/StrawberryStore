<?php

namespace controllers;

use models\User;

include_once ROOT . '/models/User.php';

class CabinetController
{
    public function actionIndex()
    {
        $userID = User::checkLogged();

        $user = User::getUserById($userID);

        require_once(ROOT . '/views/cabinet/index.php');

        return true;
    }

    public function actionEdit()
    {
        $userID = User::checkLogged();

        $user = User::getUserById($userID);

        $name = $user['name'];
        $lastname = $user['lastname'];
        $password = $user['password'];
        $birthDay = $user['birth_day'];
        $email = $user['email'];

        $result = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];
            $check = $_POST['check'];

            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть меньше 2-х символов';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            if ($errors == false) {
                $result = User::edit($userID, $name, $lastname, $birthDay, $password);
            }
        }

        require_once(ROOT . '/views/cabinet/edit.php');

        return true;
    }
}
