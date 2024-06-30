<?php

namespace models;

use models\User;

include_once ROOT . '/models/User.php';

/**
 * Абстрактный класс содержащий общую логику для работы контроллеров,
 * использующиеся в админ-панели
 */
abstract class AdminBase
{
    public static function checkAdmin()
    {
        //Получаем Id пользователя 
        $userId = User::checkLogged();
        //Получаем все данные пользователя
        $user = User::getUserById($userId);
        //Проверяем явлется ли он администратором
        if ($user['role'] == 'admin') {
            //Если да, то впускаем в админ-панель
            return true;
        }
        //если нет, выдаем ощибку об ограничении прав доступа
        die('Access denied');
    }
}