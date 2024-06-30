<?php

namespace controllers;

use models\AdminBase;
use models\Category;

include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/AdminBase.php';

class AdminCategoryController extends AdminBase
{
    public function actionIndex()
    {
        //Проверка прав доступа
        self::checkAdmin();
        //Получаем все категории которые есть
        $categoryList = Category::getCategoryListAdmin();

        require_once(ROOT . '/views/administrator/Category/adminCategory.php');
        return true;
    }

    public function actionUpdate($id)
    {
        //Проверка прав доступа
        self::checkAdmin();

        $category = Category::getCategoryById($id);

        if (isset($_POST['submit'])) {
            //Если форма отправлена
            //Получаем данные из формы
            $options['name'] = $_POST['name'];
            $options['sort_order'] = $_POST['sort_order'];
            $options['status'] = $_POST['status'];

            Category::updateCategoryById($id, $options);

            header("Location: /admin/category");
        }


        require_once(ROOT . '/views/administrator/Category/updateCategory.php');
        return true;
    }

    public function actionCreate()
    {
        //Проверка прав доступа
        self::checkAdmin();

        //Оюработка формы
        if (isset($_POST['submit'])) {
            //Если форма отправлена
            //Получаем данные из формы
            $options['name'] = $_POST['name'];
            $options['sort_order'] = $_POST['sort_order'];
            $options['status'] = $_POST['status'];

            $errors = false;

            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поля';
            };

            if ($errors == false) {
                //если ошибок нет, то добавляем новую категорию
                $id = Category::createCategory($options);

                header("Location: /admin/category");
            }
        }

        require_once(ROOT . "/views/administrator/Category/createCategory.php");
        return true;
    }

    public function actionDelete($id)
    {
        //Проверка прав доступа
        self::checkAdmin();

        $category = Category::getCategoryById($id);

        if (isset($_POST['submit'])) {
            //Если форма отправлена 
            //Удаляем категорию по указанному Id
            Category::deleteCategoryById($id);
            //Перенаправление пользователя на страницу управления категоримя
            header("Location: /admin/category");
        }

        require_once(ROOT . "/views/administrator/Category/deleteCategory.php");
        return true;
    }
}
