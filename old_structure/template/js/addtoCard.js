let itemBox = document.querySelectorAll('.card');

function setLocaldata(article, data) {
    localStorage.setItem(article, JSON.stringify(data));
}

function getLocaldata(event){
   return JSON.parse(localStorage.getItem(event));
}

function addToCard(articl, b, c) {
    console.log(articl + ' ' + b + ' ' + c);
    var itemData = {},
        itemTitle = b,
        itemPrice = c;
    itemData[articl] = [itemTitle, itemPrice, 1];
    setLocaldata(articl, itemData);
    addToBasket();
}

function addToBasket() {
    if (localStorage.length != 0) {
        for (let i = 0; i < localStorage.length; i++) {
            artic = localStorage.key(i);
            console.log(artic);
            var itemData = getLocaldata(artic);
            for (var items in itemData) {
                document.getElementById('basket').insertAdjacentHTML('afterbegin',
                    `<div class="row"> 
                <div class="col-lg-6">
                    <div class="product-cart--body">
                        <div class="product-cart--img">
                            <a href=""><img src="img/Jilet.jpg" alt="" class="basket-container--img rounded"></a>
                        </div>
                        <div class="product-cart--discription">
                            <div class="product-cart--name"><a href=""><span>${itemData[items][0]}</span></a></div>
                            <table class="product-cart--elements">
                                <tr>
                                    <td>Артикул:</td>
                                    <td name="articl" id="articl_product">${artic}</td>
                                </tr>
                                <tr>
                                    <td>Размер:</td>
                                    <td name="size">L</td>
                                </tr>
                                <tr>
                                    <td>Цвет:</td>
                                    <td name="color">Синий</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="product-cart--price">${price = itemData[items][1]}</div>
                </div>
                <div class="col-lg-2">
                    <div class="product-cart--quantity">
                        <button class="quantity-minus quantity-btn" onclick="minusQuant(${artic})"></button>
                        <input type="text" class="quntity--value" id="quant" value="${quant = itemData[items][2]}" size="1" placeholder="1">
                        <button class="quantity-plus quantity-btn" onclick="plusQuant(${artic})"></button>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="product-cart--summ">${quant * price}</div>
                </div>
                <div class="col-lg-12">
                    <div class="product-delete"><a href="#" onclick="delCart()"><u>Удалить</u></a></div>
                </div>
            </div>`)

            }

        }
    } else document.getElementById('basket').insertAdjacentHTML('afterbegin',
        `<h1 class="center">Корзина пуста</h1>`);
}

function delCart() {
    let prodTit = document.getElementById('articl_product').innerText;
    console.log(prodTit);
    localStorage.removeItem(prodTit);
    window.location.reload();
}
let quantity = 1;

function plusQuant(art) {
    var itemData = getLocaldata(art);
    itemData[art][2]++;
    setLocaldata(art,itemData);
    window.location.reload();
}

function minusQuant(art) {
    var itemData = getLocaldata(art);
    if (itemData[art][2] > 1) {
        itemData[art][2]--;
        setLocaldata(art,itemData);
    window.location.reload();
    }
}