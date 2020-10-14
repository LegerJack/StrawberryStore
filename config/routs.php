<?php
return array(
// Товар
  'Strawberry/product/([0-9]+)' => 'product/view/$1', //actionView в ProductController
// Каталог товаров 
  'Strawberry/category/([0-9]+)/page-([0-9]+)' => 'category/view/$1/$2',
  'Strawberry/category/([0-9]+)' => 'category/view/$1',
// Корзина
  'Strawberry/cart/checkout' => 'cart/checkout',
  'Strawberry/cart/delete/([0-9]+)' => 'cart/delete/$1',
  'Strawberry/cart/add/([0-9]+)' => 'cart/add/$1',
  'Strawberry/cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
  'Strawberry/cart' => 'cart/index',
// Регистрация
  'Strawberry/user/register' => 'user/register',
// Выход
  'Strawberry/user/logout' => 'user/logout',
// Вход
  'Strawberry/user/login' => 'user/login',
// Личный кабине тпользователя
  'Strawberry/cabinet/edit' => 'cabinet/edit',
  'Strawberry/cabinet'=> 'cabinet/index',
//Управление категориями товаров
  'Strawberry/admin/category/create' => 'adminCategory/create',
  'Strawberry/admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
  'Strawberry/admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
  'Strawberry/admin/category' => 'adminCategory/index',
//Управление категориями товаров
  'Strawberry/admin/product/create' => 'adminProduct/create',
  'Strawberry/admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
  'Strawberry/admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
  'Strawberry/admin/product' => 'adminProduct/index',
//Управление категориями товаров
  'Strawberry/admin/order/view/([0-9]+)' => 'admiOrder/view/$1',
  'Strawberry/admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
  'Strawberry/admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
  'Strawberry/admin/order' => 'adminOrder/index',
// Админ-панель
  'Strawberry/admin' => 'admin/index',
//Форма обратной связи
  'Strawberry/contact'=> 'site/contact',
// Главная страница сайта
  'Strawberry' => 'site/index'
);

?>