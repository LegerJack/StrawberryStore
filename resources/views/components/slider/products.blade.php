@if(!empty($slides))
    <div id="cartCarousel" class="cart_carousel">
        <div class="container">
            <div class="underline"></div>
            <div class="wrapper">
                <div class="wrapp-hor">
                    @foreach ($slides as $slide)
                        @include('components.card.product', ['product' => $slide])
                    @endforeach
                </div>
                <button id="test-left" class="btn-control btn-control--left"></button>
                <button id="test-right" class="btn-control btn-control--right"></button>
            </div>
        </div>
    </div>
@endif
