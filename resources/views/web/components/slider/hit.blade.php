@if(!empty($slides) && $slides->count() !== 0)
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
                        <x-card.product :product="$slide"/>
                    @endforeach
                </div>
                <button id="left" class="btn-control btn-control--left"></button>
                <button id="right" class="btn-control btn-control--right"></button>
            </div>
        </div>
    </div>
@endif
@push('script.footer')
    <script>
        (new SliderCarousel({
            main: '.wrapper-hit',
            wrap: '.wrapp-hor-hit',
            next: '#right',
            prev: '#left',
        })).init();
    </script>
@endpush
