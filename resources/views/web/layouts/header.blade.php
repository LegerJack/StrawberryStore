<header>
    <div class="header-wrapp">
        <div class="header-top">
            <ul>
                <li class="call-back"><a href="/contact/" class="call-back--item">Обратная связь</a></li>
            </ul>
        </div>
        <div class="header-content">
            <div class="row">
                <div class="col-lg-3 mt-2 center">
                    <a href="/" class="header-logo"><b>Strawberry</b></a>
                </div>
                <div class="col-lg-5">
                    <form class="search">
                        <input class="fit textSearch" type="search" placeholder="Поиск">
                        <span class="find iconSearch"></span>
                    </form>
                </div>
                <div class="col-lg-3 mt-2 flexible left-margin">
                    <div class="adress">
                        <a href="#">
                            <i class="fas fa-map-marker-alt"></i> <br>Адрес
                        </a>
                    </div>

                    @guest
                        <div class="reg-user unable">
                            <a href="user/login">
                                <i class="fas fa-user"></i><br>Вход
                            </a>
                        </div>
                    @endguest

                    @auth
                        <div class="reg-user center unable ">
                            <a href="user/logout">
                                <i class="fas fa-user"></i><br>Выход
                            </a>
                        </div>
                        <div class="reg-user center unable ">
                            <a href="cabinet">
                                <i class="fas fa-book-open"></i><br>Аккаунт
                            </a>
                        </div>
                    @endauth
                    <div class="basket">
                        <a href="cart/">
                            <i class="fas fa-shopping-basket"></i>
                            <br>
                            Корзина</a>
{{--                        <span id="cart-count" class="badge badge-danger"><? echo Cart::countItems(); ?></span>--}}
                    </div>
                </div>
            </div>
        </div>
        <div id="top-menu">
            <ul class="topmenus">
{{--                <?php foreach ($categories as $categoryItem) : ?>--}}
{{--                <li class="topmenus-item <? if ($categoryId == $categoryItem['id']) echo 'topmenus-item-active'; ?>"><a href="/category/<? echo $categoryItem['id'] ?>"><? echo $categoryItem['name'] ?></a></li>--}}
{{--            <?php endforeach; ?>--}}
            </ul>
        </div>
    </div>
</header>
