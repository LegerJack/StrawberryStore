<?php

namespace controllers;

use components\Pagination;
use models\Category;
use models\Product;

include_once ROOT . '/models/Product.php';
include_once ROOT . '/models/Category.php';
include_once ROOT . '/components/pagination.php';

class CategoryController
{
    public function actionView($categoryId, $page = 1)
    {
        $categories = array();
        $categories = Category::getCategoryList();

        $total = Product::getTotalProducts($categoryId);

        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

        $categoryProduct = array();
        $categoryProduct = Product::getProductListByCategory($categoryId, $page);


        require_once(ROOT . '/views/category/view_category.php');
        return true;
    }

}