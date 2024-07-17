<?php include ROOT . '/views/layouts/header.php'; ?>
<main class="upHead">
    <div class="container">
        <div class="header_product">
            <a href="#" class="header_product--back">Назад</a>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Главная</a></li>
                    <li class="breadcrumb-item"><a href="/category/<? echo $product['category_id'] ?>"><? echo $category['name'] ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><? echo $product['name'] ?></li>
                </ol>
            </nav>
        </div>
        <div class="product_body">
            <div class="title_product">
                <h2><b><? echo $product['name'] ?></b></h2>
                <div class="title-bot_product">
                    <p>Артикул: <span id="articl_product"><? echo $product['code'] ?></span></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="row">
                        <div class="col-4 col-lg-3 product_img-do">
                            <div class="mt-2 dop-img">
                                <img class="dop-img__img" onclick="imgControll('<?php echo $product['name'] ?>_1')" id="<? echo $product['name']?>_1" src="/template/img/Jilet2.jpg" alt="">
                            </div>
                            <div class="mt-2 dop-img">
                                <img class="dop-img__img" onclick="imgControll('<?php echo $product['name']?>_2')" id="<? echo $product['name']?>_2" src="/template/img/Jilet2.jpg" alt="">
                            </div>
                            <div class="mt-2 dop-img">
                                <img class="dop-img__img" onclick="imgControll('<?php echo $product['name']?>_3')" id="<? echo $product['name']?>_3" src="/template/img/Jilet.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-8 col-lg-9 product_img">
                            <img class="product_img--img" src="/template/img/Jilet.jpg" id="glPr" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="product_price">
                                <h2><b><? echo $product['price'] ?></b> ₽</h2>
                                <div class="product_color">
                                    <p class="d-inline-block">Цвет:</p> <span>Синий</span> <span>Черный</span>
                                </div>
                                <div class="product_size">
                                    <p class="d-inline-block">Размер:</p> <span>L</span> <span>X</span>
                                </div>
                            </div>
                            <div class="add-to-card">
                                <button class="add-to-card_button media_add-btn" onclick="addToCard()">Добавить в корзину</button>
                                <button></button>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="product_description">
                                <h5><b>Описание:</b></h5>
                                <p><? echo $product['discription'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="cart_carousel" class="cart_carousel">
            <div class="container">
                <h2><b>Рекомендуем</b></h2>
                <div class="underline"></div>
                <div class="wrapper">
                    <div class="wrapp-hor">
                        <? foreach ($sliderProducts as $recomend) : ?>
                            <div class="card">
                                <a href="/product/<? echo $recomend['id'] ?>"><img src="/template/img/Jilet.jpg" alt="" class="card-img-top"></a>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="/product/<? echo $recomend['id'] ?>" class="card-title">
                                                <p><? echo $recomend['name'] ?></p>
                                            </a>
                                        </div>
                                        <div class="col-12">
                                            <h5 class="card-price"><? echo $recomend['price'] ?> ₽</h5>
                                        </div>
                                    </div>
                                    <div class="card-button center">
                                        <a href="/cart/add/<? echo $recomend['id'] ?>" data-id="<? echo $recomend['id']; ?>" class="add-to-card_button">Добавить в корзину</a>
                                    </div>
                                </div>
                                <div class="center heart">
                                    <i class="far fa-heart"></i>
                                </div>
                            </div>
                        <? endforeach; ?>
                    </div>
                    <button id="test-left" class="btn-control btn-control--left"></button>
                    <button id="test-right" class="btn-control btn-control--right"></button>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include ROOT . '/views/layouts/footer.php' ?>