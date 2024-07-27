@if(!empty($products) && $products->count() !== 0)
    <div class="prod__want">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    <x-card.product :product="$product"/>
                @endforeach
            </div>
        </div>
    </div>
@endif
