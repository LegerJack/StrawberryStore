<?php

//FRONT CONTROLLER

//1. Общие настройки

//Вывод ошибок
use components\Router;

ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();
//2. Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/router.php');
require_once(ROOT.'/components/db.php');
//3.Установка соединений с БД

//4.ВЫзов router

$router = new Router();
$router->run();
?>