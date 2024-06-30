<?php

namespace models;

use components\Db;

class Order
{
    /**
     * Сохранение заказа
     *
     */
    public static function Save($userName, $userTel, $userComment, $userId, $products)
    {

        $product = json_encode($products);

        $db = Db::getConnection();

        $sql = "INSERT INTO kris_orders (user_name, user_phone, user_comment, user_id, products)
         VALUES (:user_name, :user_phone, :user_comment, :user_id, :products)";

        $result = $db->prepare($sql);
        $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $userTel, PDO::PARAM_STR);
        $result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);
        $result->bindParam(':user_id', $userId, PDO::PARAM_STR);
        $result->bindParam(':products', $product, PDO::PARAM_STR);

        if ($result->execute()) {
            return 1;
        }
        return 0;
    }
}