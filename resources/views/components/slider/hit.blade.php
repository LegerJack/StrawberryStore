@if(!empty($slides))
    <div id="hit-prod" class="hit-prod">
        <div class="container">
            <h2>Хит продаж</h2>
            <div class="underline"></div>
            <div class="wrapper-hit">
                <div class="wrapp-hor-hit"
                     data-cycle-fx=carousel
                     data-cycle-timeout=1000
                     data-cycle-carousel-visible=5
                     data-cycle-carousel-fluid=true
                >
                    @foreach($slides as $slide)
                    <div class="card">
                        <a href="/product/{{ $slide->id }}">
                            <img src="{{ empty($slide->picture_path) ? asset('public/assets/images/no-image.svg') : $slide->picture_path }}"
                                 alt=""
                                 class="card-img-top"
                            >
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
                                <a href="/product/{{ $slide->id }}" class="add-to-card_button">Добавить в корзину</a>
                            </div>
                        </div>
                        <div class="center heart">
                            <i class="far fa-heart"></i>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button id="left" class="btn-control btn-control--left"></button>
                <button id="right" class="btn-control btn-control--right"></button>
            </div>
        </div>
    </div>
@endif
