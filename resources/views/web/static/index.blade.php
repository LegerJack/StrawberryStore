@extends('web.app')
@section('content')
    @php use App\Models\Product; @endphp
    <div class="container">
        <x-slider slider-type="auto"/>

        <x-slider slider-model="{{ Product::class }}" slider-type="products"/>

        <x-block.top-products/>

        <x-block.top-products/>

        <x-slider slider-model="{{ Product::class }}" slider-type="hit"/>
    </div>
@endsection
@push('script.footer')
    <script src="http://malsup.github.com/jquery.cycle2.js"></script>
    <script src="{{ url('resources/js/imageControl.js') }}"></script>
    <script src="{{ url('resources/js/addtoCard.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        let addToCartButton = document.querySelectorAll('.add-to-card_button');
        addToCartButton.forEach((button)=> {
            button.addEventListener('click', function () {
                let itemID = this.getAttribute("data-id");
                fetch (new URL(`/cart/addToBasket/${itemID}`, `${location.protocol}//${location.host}/`))
                    .then(response => response.json())
                    .then(data => {
                        document.querySelector('#cart-count').innerHTML = data;
                    })
            })
        })
    </script>
@endpush
