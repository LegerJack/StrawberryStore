<?php

namespace controllers;

use models\AdminBase;

include_once ROOT . '/models/AdminBase.php';

class AdminOrderController extends AdminBase
{
    public function actionIndex()
    {
        self::checkAdmin();
    }
}