@if(!empty($products))
    <div class="prod__want">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3 mt-2">
                        <div class="card">
                            <a href="/product/{{ $product->id }}"><img src="/template/img/Jilet.jpg" alt="" class="card-img-top"></a>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <a href="/product/{{ $product->id }}" class="card-title">
                                            <p>{{ $product->name }}</p>
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <h5 class="card-price">{{ $product->price }} ₽</h5>
                                    </div>
                                </div>
                                <div class="card-button center">
                                    <a href="/cart/add/{{ $product->id }}" data-id="{{ $product->id }}" class="add-to-card_button">Добавить в корзину</a>
                                </div>
                            </div>
                            <div class="center heart">
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
