<?php
return array(
// Товар
  'product/([0-9]+)' => 'product/view/$1', //actionView в ProductController
// Каталог товаров 
  'category/([0-9]+)/page-([0-9]+)' => 'category/view/$1/$2',
  'category/([0-9]+)' => 'category/view/$1',
// Корзина
  'cart/checkout' => 'cart/checkout',
  'cart/delete/([0-9]+)' => 'cart/delete/$1',
  'cart/add/([0-9]+)' => 'cart/add/$1',
  'art/addAjax/([0-9]+)' => 'cart/addAjax/$1',
  'cart' => 'cart/index',
// Регистрация
  'user/register' => 'user/register',
// Выход
  'user/logout' => 'user/logout',
// Вход
  'user/login' => 'user/login',
// Личный кабине тпользователя
  'cabinet/edit' => 'cabinet/edit',
  'cabinet'=> 'cabinet/index',
//Управление категориями товаров
  'admin/category/create' => 'adminCategory/create',
  'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
  'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
  'admin/category' => 'adminCategory/index',
//Управление категориями товаров
  'admin/product/create' => 'adminProduct/create',
  'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
  'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
  'admin/product' => 'adminProduct/index',
//Управление категориями товаров
  'admin/order/view/([0-9]+)' => 'admiOrder/view/$1',
  'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
  'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
  'admin/order' => 'adminOrder/index',
// Админ-панель
  'admin' => 'admin/index',
//Форма обратной связи
  'contact'=> 'site/contact',
// Главная страница сайта
  '' => 'site/index'
);

?>