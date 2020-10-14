<?php include ROOT . '/views/layouts/header.php'; ?>
<main class="upHead">
    <div class="container">
        <h2 class="pl-5"><b>Корзина</b></h2>
        <div class="basket-container" id="basket">
            <? if ($productsInCart) : ?>
                <? foreach ($products as $product) : ?>
                    <div class="row border-top rounded mt-3">
                        <div class="product-cart--name">
                            <a href="/product/<? echo $product['id'] ?>"><span><? echo $product['name'] ?></span>
                            </a>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="product-cart--body">
                                <div class="product-cart--img">
                                    <a href=""><img src="/template/img/Jilet.jpg" alt="" class="basket-container--img rounded"></a>
                                </div>
                                <div class="product-cart--discription">
                                    <table class="product-cart--elements table">
                                        <tr>
                                            <td>Артикул:</td>
                                            <td name="articl" id="articl_product"><? echo $product['code'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Размер:</td>
                                            <td name="size">L</td>
                                        </tr>
                                        <tr>
                                            <td>Цвет:</td>
                                            <td name="color">Синий</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-5 col-lg-2">
                            <div class="product-cart--price"><? echo $product['price'] ?></div>
                        </div>
                        <div class="col-3 col-lg-2">
                            <div class="product-cart--quantity">
                                <button class="quantity-minus quantity-btn" ></button>
                                <input class="quntity--value" value="<? echo $productsInCart[$product['id']] ?>" size="1" >
                                <button class="quantity-plus quantity-btn"></button>
                            </div>
                        </div>
                        <div class="col-4 col-lg-2">
                            <div class="product-cart--summ"><? echo $product['price'] * $productsInCart[$product['id']] ?></div>
                        </div>
                        <div class="col-lg-12">
                            <div class="product-delete"><a href="cart/delete/<? echo $product['id'] ?>" onclick="delCart()"><u>Удалить</u></a></div>
                        </div>
                    </div>
                <? endforeach; ?>
                <h3>Итого: <? echo $totalPrice; ?></h3> 
                <div class="media-center mt-5">
                <a href="cart/checkout" class="add-to-card_button media_add-btn"> Оформить заказ</a>
            </div>
                <? else: ?>
                    <h3 class="center">Корзина пуста</h3>
            <? endif; ?>
           
        </div>
    </div>
</main>
<?php include ROOT . '/views/layouts/footer.php' ?>