@if(!empty($slides) && $slides->count() !== 0)
    <div id="cartCarousel" class="cart_carousel">
        <div class="container">
            <div class="underline"></div>
            <div class="wrapper">
                <div class="wrapp-hor">
                    @foreach ($slides as $slide)
                        <x-card.product :product="$slide"/>
                    @endforeach
                </div>
                <button id="test-left" class="btn-control btn-control--left"></button>
                <button id="test-right" class="btn-control btn-control--right"></button>
            </div>
        </div>
    </div>
@endif
@push('script.footer')
    <script>
        (new SliderCarousel({
            main: '.wrapper',
            wrap: '.wrapp-hor',
            next: '#test-right',
            prev: '#test-left',
        })).init();
    </script>
@endpush
