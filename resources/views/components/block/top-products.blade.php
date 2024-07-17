@if(!empty($products))
    <div class="prod__want">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    @include('components.card.product', compact('product'))
                @endforeach
            </div>
        </div>
    </div>
@endif
