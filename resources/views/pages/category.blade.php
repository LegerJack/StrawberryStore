@include ('general.header')
<main class="upHead">
    <div class="prod__want">
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                    @include('components.card.product', compact('product'))
                @endforeach
            </div>
            <!-- Постраничная навигация-->
            <div class="center">
                <nav class="center">
                    {{ $products->links() }}
                </nav>
            </div>

        </div>
    </div>
</main>
@include ('general.footer')
