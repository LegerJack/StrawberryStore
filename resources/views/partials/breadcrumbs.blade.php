<div class="header_product">
    <a href="#" class="header_product--back">Назад</a>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            @foreach ($breadcrumbs as $breadcrumb)
                @if (!empty($breadcrumb->url) && !$loop->last)
                    <li class="breadcrumb-item">
                        <a href="{{ $breadcrumb->url }}">
                            {{ $breadcrumb->title }}
                        </a>
                    </li>
                @else
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ $breadcrumb->title }}
                    </li>
                @endif
            @endforeach
        </ul>
    </nav>
</div>
