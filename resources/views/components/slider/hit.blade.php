@if(!empty($slides))
    <div class="product_carousel mx-auto">
        <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($slides as $slide)
                    <li data-target="#carouselIndicators" data-slide-to="{{ $slide->id }}"
                        @class(['active' => $loop->first])
                    ></li>
                @endforeach
                <li data-target="#carouselIndicators" data-slide-to="1"></li>
                <li data-target="#carouselIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                @foreach($slides as $slide)
                    <div @class(['carousel-item', 'active' => $loop->first])>
                        <img class="d-block w-50"
                             src="{{ empty($slide->picture_path) ? asset('public/assets/images/no-image.svg') : $slide->picture_path }}"
                             alt="{{ $slide->name }}"
                        >
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
@endif

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
