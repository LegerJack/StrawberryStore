@if(!empty($slides))
    <div id="cartCarousel" class="cart_carousel">
        <div class="container">
            <div class="underline"></div>
            <div class="wrapper">
                <div class="wrapp-hor">
                    @foreach ($slides as $slide)
                    <div class="card" style="width: 18rem;">
                        <a href="/product/{{ $slide->id }}">
                            <img src="/template/img/Jilet.jpg" alt="" class="card-img-top">
                        </a>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <a href="/product/{{ $slide->id }}" class="card-title">
                                        <p>{{ $slide->name }}</p>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <h5 class="card-price">{{ $slide->price }} ₽</h5>
                                </div>
                            </div>
                            <div class="card-button center">
                                <a href="/cart/add/{{ $slide->id }}" data-id="{{ $slide->id }}"
                                   class="add-to-card_button">Добавить в корзину</a>
                            </div>
                        </div>
                        <div class="center heart">
                            <i class="far fa-heart"></i>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button id="test-left" class="btn-control btn-control--left"></button>
                <button id="test-right" class="btn-control btn-control--right"></button>
            </div>
        </div>
    </div>
@endif
