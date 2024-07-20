<?php
use Diglactic\Breadcrumbs\Breadcrumbs;

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', url('/'));
});

Breadcrumbs::for('category', function ($trail, $category) {
    $trail->parent('home');
    $trail->push($category->name, url('/catalog/' . $category->id));
});

Breadcrumbs::for('product', function ($trail, $product) {
    $category = $product->categories()->first();
    $trail->parent('category', $category);
    $trail->push($product->name, url('/products/' . $product->id));
});
