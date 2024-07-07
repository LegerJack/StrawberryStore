@include ('general.header')

<main class="upHead">
    <div class="container">
        <x-slider slider-type="auto"/>

        <x-slider slider-type="products"/>

{{--        <div class="prod__want">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <? if (!empty($latestProducts)) {--}}
{{--                        foreach ($latestProducts as $product) : ?>--}}
{{--                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3 mt-2">--}}
{{--                                <div class="card">--}}
{{--                                    <a href="/product/<? echo $product['id'] ?>"><img src="/template/img/Jilet.jpg" alt="" class="card-img-top"></a>--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-12">--}}
{{--                                                <a href="/product/<? echo $product['id'] ?>" class="card-title">--}}
{{--                                                    <p><? echo $product['name'] ?></p>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-12">--}}
{{--                                                <h5 class="card-price"><? echo $product['price'] ?> ₽</h5>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-button center">--}}
{{--                                            <a href="/cart/add/<? echo $product['id'] ?>" data-id="<? echo $product['id']; ?>" class="add-to-card_button">Добавить в корзину</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="center heart">--}}
{{--                                        <i class="far fa-heart"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        <?php endforeach;--}}
{{--                    } ?>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="center">--}}
{{--            <div class="grid center" data-masonry='{"itemSelector": ".grid-item", "columnWidth": 76.1, "percentPosition": true}'>--}}
{{--                <a href="/category/<? echo $categories[1]['id'] ?>" class="grid-item grid-item--wd2">--}}
{{--                    <img src="template/img/woman.jpeg" alt="" class="grid-item_img">--}}
{{--                    <span class="grid-item-name"><? echo $categories[1]['name'] ?></span>--}}
{{--                </a>--}}
{{--                <a href="/category/<? echo $categories[3]['id'] ?>" class="grid-item">--}}
{{--                    <img src="template/img/cosmetic.jpg" alt="" class="grid-item_img img-fluid">--}}
{{--                    <span class="grid-item-name"><? echo $categories[3]['name'] ?></span>--}}
{{--                </a>--}}
{{--                <a href="/category/<? echo $categories[4]['id'] ?>" class="grid-item">--}}
{{--                    <img src="template/img/pro-cosmet.jpg" alt="" class="grid-item_img">--}}
{{--                    <span class="grid-item-name"><? echo $categories[4]['name'] ?></span>--}}
{{--                </a>--}}
{{--                <a href="/category/<? echo $categories[6]['id'] ?>" class="grid-item">--}}
{{--                    <img src="template/img/fur.jpg" alt="" class="grid-item_img">--}}
{{--                    <span class="grid-item-name"><? echo $categories[6]['name'] ?></span>--}}
{{--                </a>--}}
{{--                <a href="/category/<? echo $categories[8]['id'] ?>/" class="grid-item">--}}
{{--                    <img src="template/img/acsesoire.jpg" alt="" class="grid-item_img">--}}
{{--                    <span class="grid-item-name"><? echo $categories[8]['name'] ?></span>--}}
{{--                </a>--}}
{{--                <a href="/category/<? echo $categories[0]['id'] ?>" class="grid-item grid-item--wd2 grid-item--wd3">--}}
{{--                    <img src="template/img/men.jpg" alt="" class="grid-item_img">--}}
{{--                    <span class="grid-item-name"><? echo $categories[0]['name'] ?></span>--}}
{{--                </a>--}}
{{--                <a href="/category/<? echo $categories[5]['id'] ?>" class="grid-item grid-item--wd4">--}}
{{--                    <img src="template/img/bijuteriya.jpg" alt="" class="grid-item_img">--}}
{{--                    <span class="grid-item-name"><? echo $categories[5]['name'] ?></span>--}}
{{--                </a>--}}
{{--                <a href="/category/<? echo $categories[7]['id'] ?>" class="grid-item grid-item--wd4">--}}
{{--                    <img src="template/img/electro.jpg" alt="" class="grid-item_img">--}}
{{--                    <span class="grid-item-name"><? echo $categories[7]['name'] ?></span>--}}
{{--                </a>--}}
{{--                <a href="/category/<? echo $categories[2]['id'] ?>" class="grid-item grid-item--wd2">--}}
{{--                    <img src="template/img/kids.jpg" alt="" class="grid-item_img grid-item--hg2">--}}
{{--                    <span class="grid-item-name"><? echo $categories[2]['name'] ?></span>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="prod__want">--}}
{{--            <div class="row">--}}
{{--                <? if !empty($sliderHotProducts) ? foreach ($latestProducts as $product) : ?>--}}
{{--                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3 mt-2">--}}
{{--                    <div class="card">--}}
{{--                        <a href="/product/<? echo $product['id'] ?>"><img src="/template/img/Jilet.jpg" alt="" class="card-img-top"></a>--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-12">--}}
{{--                                    <a href="/product/<? echo $product['id'] ?>" class="card-title">--}}
{{--                                        <p><? echo $product['name'] ?></p>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-12">--}}
{{--                                    <h5 class="card-price"><? echo $product['price'] ?> ₽</h5>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card-button center">--}}
{{--                                <a href="/product/<? echo $product['id'] ?>" class="add-to-card_button">Добавить в корзину</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="center heart">--}}
{{--                            <i class="far fa-heart"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <? endforeach; ?>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div id="hit-prod" class="hit-prod">--}}
{{--            <div class="container">--}}
{{--                <h2>Хит продаж</h2>--}}
{{--                <div class="underline"></div>--}}
{{--                <div class="wrapper-hit">--}}
{{--                    <div class="wrapp-hor-hit" data-cycle-fx=carousel data-cycle-timeout=1000 data-cycle-carousel-visible=5 data-cycle-carousel-fluid=true>--}}
{{--                        <? if !empty($sliderHotProducts) ? foreach ($sliderHotProducts as $hotProduct) : ?>--}}
{{--                        <div class="card">--}}
{{--                            <a href="/product/<? echo $hotProduct['id'] ?>"><img src="/template/img/Jilet.jpg" alt="" class="card-img-top"></a>--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-12">--}}
{{--                                        <a href="/product/<? echo $hotProduct['id'] ?>" class="card-title">--}}
{{--                                            <p><? echo $hotProduct['name'] ?></p>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-12">--}}
{{--                                        <h5 class="card-price"><? echo $hotProduct['price'] ?> ₽</h5>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="card-button center">--}}
{{--                                    <a href="/product/<? echo $hotProduct['id'] ?>" class="add-to-card_button">Добавить в корзину</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="center heart">--}}
{{--                                <i class="far fa-heart"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <? endforeach; ?>--}}
{{--                    </div>--}}
{{--                    <button id="left" class="btn-control btn-control--left"></button>--}}
{{--                    <button id="right" class="btn-control btn-control--right"></button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</main>
@include ('general.footer')
