@php use App\Models\Product; @endphp

@include ('general.header')
<main class="upHead">
    <div class="container">
        <x-slider slider-type="auto"/>

        <x-slider slider-model="{{ Product::class }}" slider-type="products"/>

        <x-block.top-products/>

        <x-block.category-list/>

        <x-block.top-products/>

        <x-slider slider-model="{{ Product::class }}" slider-type="hit"/>
    </div>
</main>
@include ('general.footer')
