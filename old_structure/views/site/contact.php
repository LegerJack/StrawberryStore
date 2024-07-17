<?php include ROOT . '/views/layouts/header.php'; ?>
<main class="upHead">
    <div class="prod__want">
         <div class="container">
        <div class="row">
            <div class="form-controle">
                <? if ($result) : ?>
                    <h2>Сообщение отправлено!</h2>
                    <h4>Мы ответим вам на указанный вами E-mail.</h4>
                <? else : ?>
                    <?php if (isset($errors) && is_array($errors)) : ?>
                        <ul>
                            <? foreach ($errors as $error) : ?>
                                <li> - <? echo $error ?></li>
                            <? endforeach; ?>
                        </ul>
                    <? endif; ?>
                    <form action="#" class="sign" method="POST">
                        <h3>Обратная свзяь</h3>
                        <label for="">Введите ваш E-mail</label>
                        <input type="email" name="userEmail" class="form-control" placeholder="E-mail" value="<? echo $userEmail ?>">
                        <label for="">Ваше сообщение</label>
                        <textarea type="text" name="userText" rows="5" class="form-control" value="<? echo $userText ?>"></textarea>
                        <button class="sign_button mt-4" name="submit" type="submit">Отправить</button>
                    </form>
                <? endif; ?>
            </div>
        </div>
    </div>
    </div>
   
</main>
<?php include ROOT . '/views/layouts/footer.php' ?>