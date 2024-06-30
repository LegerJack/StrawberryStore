<?php

namespace models;
class Cart
{
    public static function addProduct($id)
    {
        $id = intval($id);

        $productList = array();

        if (isset($_SESSION['products'])) {
            $productList = $_SESSION['products'];
        }
        //Если товар был добавлен ибыл добавлен ещё раз
        if (array_key_exists($id, $productList)) {
            $productList[$id]++;
        } else {
            $productList[$id] = 1;
        }

        $_SESSION['products'] = $productList;

        return self::countItems();
    }

    /**
     * Подсчет количества товаров в Сессии
     */
    public static function countItems()
    {
        if (isset($_SESSION['products'])) {
            $count = 0;
            foreach ($_SESSION['products'] as $id => $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        } else {
            return 0;
        }
    }

    /**
     * Возвращает массив товаров хранящихся в массиве сессии
     */
    public static function getProducts()
    {
        if (isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }
        return false;
    }

    public static function clear()
    {
        if (isset($_SESSION['products'])) {
            unset($_SESSION['products']);
        }
    }

    public static function getTotalPrice($products)
    {
        $productsInCart = self::getProducts();

        $total = 0;

        if ($productsInCart) {
            foreach ($products as $item) {
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }

        return $total;
    }

    /**
     * Удаляет товар с указанным id из корзины
     */
    public static function deleteProduct($id)
    {
        //Получаем массив с идентификатором и количеством товаров в корзине
        $productsInCart = self::getProducts();
        //Удаляем из массива элементы с указанным id
        unset($productsInCart[$id]);
        //Записываем массив товаров с удаленным элементов в сессию
        $_SESSION['products'] = $productsInCart;
    }
}