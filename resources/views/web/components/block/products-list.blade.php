<div class="prod__want">
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <x-card.product :product="$product"/>
            @endforeach
        </div>
        <div class="center">
            {{ $products->links('general.pagination') }}
        </div>
    </div>
</div>
