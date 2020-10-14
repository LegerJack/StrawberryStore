<?php include ROOT . '/views/layouts/header.php'; ?>
    <main class="upHead">
        <div class="prod__want">
            <div class="container">
            <? if($result):?>
                <h3 class="center">Вы зарегистрированы :)</h3>
            <? else: ?>
                <?php if (isset($errors) && is_array($errors)):?>
                    <ul>
                        <? foreach($errors as $error): ?>
                            <li> - <? echo $error?></li>
                        <? endforeach;?>
                    </ul>
                <? endif;?>
            <div class="row">
                <form action="#" class="signUp" method="POST">
                    <h1>Регистрация</h1>
                    <div class="form-row">
                        <div class="col-lg-6">
                            <label for="">Имя</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                        </div>
                        <div class="col-lg-6">
                            <label for="">Фамилия</label>
                            <input type="text" name="lastname" class="form-control" value="<?php echo $lastname; ?>">
                        </div>
                    </div>
                    <label for="">Дата рождения</label>
                    <input type="date" name="birthday" class="form-control" value="<?php echo $birthDay; ?>">
                    <label for="">Электронная почта</label>
                    <input type="email" name="email" class="form-control" placeholder="example@live.com" value="<?php echo $email; ?>">
                    <label for="">Пароль</label>
                    <input type="password" name="password" class="form-control" required value="<?php echo $password; ?>">
                    <label for="">Подтвердите пароль</label>
                    <input type="password" name="checkpassword" class="form-control" required>
                    <input type="checkbox" name="consent" value="true" required>Я согласен на обработку персональных данных
                    <button class="sign_button mt-4" name="submit" type="submit">Зарегистрироваться</button>
                </form>
            </div>
            <? endif; ?>
        </div>
        </div>
        
    </main>
<?php include ROOT . '/views/layouts/footer.php' ?>