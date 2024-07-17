<?php

namespace controllers;

use models\Category;
use models\Product;

include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Product.php';

class productController
{

    public function actionView($id)
    {
        $product = Product::getProductById($id);
        $sliderProducts = Product::getRecomendedProducts();
        $category = Category::getCategoryById($product['category_id']);
        require_once(ROOT . '/views/product/view.php');

        return true;
    }
}

?>