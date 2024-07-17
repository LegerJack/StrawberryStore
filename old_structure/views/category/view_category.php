<?php include ROOT . '/views/layouts/header.php'; ?>
<main class="upHead">
    <div class="prod__want">
        <div class="container">
            <div class="row">
                <? foreach ($categoryProduct as $product) : ?>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-4">
                        <div class="card">
                            <a href="/product/<? echo $product['id'] ?>"><img src="/template/img/Jilet.jpg" alt="" class="card-img-top"></a>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <a href="/product/<? echo $product['id'] ?>" class="card-title">
                                            <p><? echo $product['name'] ?></p>
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <h5 class="card-price"><? echo $product['price'] ?> ₽</h5>
                                    </div>
                                </div>
                                <div class="card-button center">
                                    <a href="/cart/add/<? echo $product['id'] ?>" class="add-to-card_button">Добавить в корзину</a>
                                </div>
                            </div>
                            <div class="center heart">
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
            <!-- Постраничная навигация-->
            <div class="center">
                <nav class="center">
                    <? echo $pagination->get(); ?>
                </nav>
            </div>

        </div>
    </div>
</main>
<?php include ROOT . '/views/layouts/footer.php' ?>