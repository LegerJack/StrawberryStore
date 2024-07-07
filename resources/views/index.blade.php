@include ('general.header')

<main class="upHead">
    <div class="container">
        <x-slider slider-type="auto"/>

        <x-slider slider-type="products"/>

        <x-block.top-products/>

        <x-block.category-list/>

        <x-block.top-products/>
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
