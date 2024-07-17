@include ('general.header')
<main class="upHead">
    @if(!empty($product))
        {{ $product->name }}
    @endif
</main>
@include ('general.footer')
