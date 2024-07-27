@extends('web.app')
@section('content')
    @php
        use App\Models\Product;
        use Diglactic\Breadcrumbs\Breadcrumbs;
    @endphp
    <div class="container">
        {{ Breadcrumbs::render('product', $product) }}
        <div class="product_body">
            <div class="title_product">
                <h1><b>{{ $product->name }}</b></h1>
                @if(!empty($product->code))
                    <div class="title-bot_product">
                        <p>Артикул: <span id="articl_product">{{ $product->name }}</span></p>
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="row">
                        @php
                            $productImages = $product->images()->where('product_id', $product->id)->get();
                        @endphp
                        <div class="col-4 col-lg-3 product_img-do">
                            @if(!empty($product->picture_path))
                                <div class="mt-2 dop-img">
                                    <img class="dop-img__img"
                                         onclick="imgControll(this)"
                                         id="{{ $product->name }}_1"
                                         src="{{ $product->picture_path }}"
                                         alt=""
                                    >
                                </div>
                            @endif
                            @foreach($productImages as $image)
                                <div class="mt-2 dop-img">
                                    <img class="dop-img__img"
                                         onclick="imgControll(this)"
                                         id="{{ $product->name }}_1"
                                         src="{{ $image->picture_path }}"
                                         alt=""
                                    >
                                </div>
                            @endforeach
                        </div>
                        @php $firstPicture = $product->picture_path?: $productImages @endphp
                        @if(!empty($firstPicture))
                            <div class="col-8 col-lg-9 product_img">
                                <img class="product_img--img"
                                     src="{{ $firstPicture }}"
                                     id="glPr"
                                     alt=""
                                >
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="product_price">
                                <h2><b>{{ $product->price }}</b> ₽</h2>
                                <div class="product_color">
                                    <p class="d-inline-block">Цвет:</p> <span>Синий</span> <span>Черный</span>
                                </div>
                                <div class="product_size">
                                    <p class="d-inline-block">Размер:</p> <span>L</span> <span>X</span>
                                </div>
                            </div>
                            <div class="add-to-card">
                                <button class="add-to-card_button media_add-btn"
                                        onclick="addToCard()"
                                >
                                    Добавить в корзину
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="product_description">
                                <h5><b>Описание:</b></h5>
                                <p>{{ $product->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-slider slider-model="{{ Product::class }}" slider-type="products"/>
    </div>
@endsection
