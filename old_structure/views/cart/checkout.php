<?php include ROOT . '/views/layouts/header.php'; ?>
<main class="upHead">
    <div class="container">
        <div class="row center">
            <? if ($result) : ?>
                <h3>Ура! Ваш заказ оформлен!</h3>
            <? else : ?>
                <div class="col-12 col-lg-6">
                    <div class="form-controle">
                        <table class="table">
                            <thead class="table-active">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Артикул</th>
                                    <th scope="col">Название </th>
                                    <th scope="col">Количество</th>
                                    <th scope="col">Цена </th>
                                </tr>
                            </thead>
                            <tbody>
                                <? $i = 0;
                                foreach ($products as $product) : $i++ ?>
                                    <tr>
                                        <th scope="row"><? echo $i; ?></th>
                                        <td><? echo $product['code'] ?></td>
                                        <td><? echo $product['name'] ?></td>
                                        <td><? echo $productsInCart[$product['id']] ?></td>
                                        <td><? echo $product['price'] ?></td>
                                    </tr>
                                <? endforeach; ?>
                                <tr class=" table-dark">
                                    <td colspan="3">Итого:</td>
                                    <td><? echo $totalQuantity ?></td>
                                    <td><? echo $totalPrice; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-controle">
                        <?php if (isset($errors) && is_array($errors)) : ?>
                            <ul>
                                <? foreach ($errors as $error) : ?>
                                    <li> - <? echo $error ?></li>
                                <? endforeach; ?>
                            </ul>
                        <? endif; ?>
                        <form action="#" class="sign" method="POST">
                            <h3>Оформление заказа</h3>
                            <label for="">Ваше имя</label>
                            <input type="name" name="userName" class="form-control" placeholder="Имя" value="<? echo $userName; ?>">
                            <label for="">Номер телефона</label>
                            <input type="tel" name="userTel" class="form-control" value="<? echo $userTel ?>">
                            <label for="">Комментарий к заказу</label>
                            <textarea type="text" name="userComment" class="form-control"></textarea>
                            <input class="sign_button mt-4" name="submit" type="submit" value="Оформить">
                        </form>
                    </div>
                </div>
            <? endif; ?>
        </div>
    </div>
</main>
<?php include ROOT . '/views/layouts/footer.php' ?>