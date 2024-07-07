@if(!empty($categories))
    <div class="center">
        <div class="grid center" data-masonry='{"itemSelector": ".grid-item", "columnWidth": 76.1, "percentPosition": true}'>
            @foreach($categories as $category)
                @php
                    $picture = empty($category->picture_path)
                    ? asset('public/assets/images/no-image.svg')
                    : $category->picture_path;
                @endphp
                <a href="/category/{{ $category->id }}" class="grid-item grid-item--wd2">
                    <img src="{{ $picture }}" alt="" class="grid-item_img">
                    <span class="grid-item-name">{{ $category->name }}</span>
                </a>
            @endforeach
        </div>
    </div>
@endif
