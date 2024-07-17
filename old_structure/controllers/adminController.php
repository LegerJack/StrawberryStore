<?php

namespace controllers;

use models\AdminBase;

include_once ROOT . '/models/AdminBase.php';

class adminController extends AdminBase
{
    public function actionIndex()
    {
        //Проверка администратора
        self::checkAdmin();
        //Подключение вида страницы
        require_once(ROOT . '/views/administrator/index.php');
        return true;
    }
}