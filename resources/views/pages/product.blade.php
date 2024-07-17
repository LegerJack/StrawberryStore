@php use App\Models\Product; @endphp

@include ('general.header')
<main class="upHead">
    <div class="container">
{{--        <div class="header_product">--}}
{{--            <a href="#" class="header_product--back">Назад</a>--}}
{{--            <nav aria-label="breadcrumb">--}}
{{--                <ol class="breadcrumb">--}}
{{--                    <li class="breadcrumb-item"><a href="/">Главная</a></li>--}}
{{--                    <li class="breadcrumb-item"><a href="/category/<? echo $product['category_id'] ?>"><? echo $category['name'] ?></a></li>--}}
{{--                    <li class="breadcrumb-item active" aria-current="page"><? echo $product['name'] ?></li>--}}
{{--                </ol>--}}
{{--            </nav>--}}
{{--        </div>--}}
        <div class="product_body">
            <div class="title_product">
                <h1><b>{{ $product->name }}</b></h1>
                @if(!empty($product->code))
                    <div class="title-bot_product">
                        <p>Артикул: <span id="articl_product">{{ $product->name }}</span></p>
                    </div>
                @endif
            </div>
{{--            <div class="row">--}}
{{--                <div class="col-12 col-lg-6">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-4 col-lg-3 product_img-do">--}}
{{--                            <div class="mt-2 dop-img">--}}
{{--                                <img class="dop-img__img" onclick="imgControll('<?php echo $product['name'] ?>_1')" id="<? echo $product['name']?>_1" src="/template/img/Jilet2.jpg" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="mt-2 dop-img">--}}
{{--                                <img class="dop-img__img" onclick="imgControll('<?php echo $product['name']?>_2')" id="<? echo $product['name']?>_2" src="/template/img/Jilet2.jpg" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="mt-2 dop-img">--}}
{{--                                <img class="dop-img__img" onclick="imgControll('<?php echo $product['name']?>_3')" id="<? echo $product['name']?>_3" src="/template/img/Jilet.jpg" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-8 col-lg-9 product_img">--}}
{{--                            <img class="product_img--img" src="/template/img/Jilet.jpg" id="glPr" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-lg-6">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12 col-lg-6">--}}
{{--                            <div class="product_price">--}}
{{--                                <h2><b><? echo $product['price'] ?></b> ₽</h2>--}}
{{--                                <div class="product_color">--}}
{{--                                    <p class="d-inline-block">Цвет:</p> <span>Синий</span> <span>Черный</span>--}}
{{--                                </div>--}}
{{--                                <div class="product_size">--}}
{{--                                    <p class="d-inline-block">Размер:</p> <span>L</span> <span>X</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="add-to-card">--}}
{{--                                <button class="add-to-card_button media_add-btn" onclick="addToCard()">Добавить в корзину</button>--}}
{{--                                <button></button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-12">--}}
{{--                            <div class="product_description">--}}
{{--                                <h5><b>Описание:</b></h5>--}}
{{--                                <p><? echo $product['discription'] ?></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <x-slider slider-model="{{ Product::class }}" slider-type="products"/>
    </div>
</main>
@include ('general.footer')
