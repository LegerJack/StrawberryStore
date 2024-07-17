<footer>
    <div class="container-fluid">
        <div class="row sectionner media-center">
            <div class="col-12 col-md-3 col-lg-3">
                <p><b>E-mail</b></p>
                <ul class="our">
                    <li>example@mail.ru</li>
                </ul>
            </div>
            <div class="col-12 col-md-3 col-lg-3">
                <p><b>Адрес:</b></p>
                <ul class="our">
                    <li>г.Пермь, Краснокамск</li>
                    <li>ул.Яблочная 2</li>
                    <li>602101</li>
                </ul>
            </div>
            <div class="col-12 col-md-3 col-lg-3">
                <p><b>Телефон:</b></p>
                <ul class="our">
                    <li>+7 (951) 922-34-85</li>
                </ul>
            </div>
            <div class="col-12 col-md-3 col-lg-3 text-right">
                <p><b>Следите за нами</b></p>
                <ul>
                    <li>
                        <a class="noSpace" href="https://vk.com/club183405596"><i class="fab fa-vk"></i><b>ontakte</b></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="http://malsup.github.com/jquery.cycle2.js"></script>

<script src="{{ url('resources/js/imageControl.js') }}"></script>
<script src="{{ url('resources/js/addtoCard.js') }}"></script>
<script src="{{ url('resources/js/carousel.js') }}"></script>
<script src="{{ url('resources/js/dopCarousel.js') }}"></script>

<script>
    const carousel = new SliderCarousel({
        main: '.wrapper',
        wrap: '.wrapp-hor',
        next: '#test-right',
        prev: '#test-left',
    });
    carousel.init();
    const carousel1 = new SliderCarousel({
        main: '.wrapper-hit',
        wrap: '.wrapp-hor-hit',
        next: '#right',
        prev: '#left',
    })
    carousel1.init();
</script>

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
</body>
</html>
