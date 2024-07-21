@include ('general.header')
<main class="upHead">
    <div class="container">
        <h2>{{ $category->name }}</h2>
        <x-block.products-list :products="$products"/>
    </div>
</main>
@include ('general.footer')
