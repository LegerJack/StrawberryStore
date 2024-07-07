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
