@include ('general.header')
<main class="upHead">
    <div class="container">
        <x-slider slider-type="auto"/>

        <x-slider slider-type="products"/>

        <x-block.top-products/>

        <x-block.category-list/>

        <x-block.top-products/>

        <x-slider slider-type="hit"/>
    </div>
</main>
@include ('general.footer')
