<?php include ROOT . '/views/layouts/header.php'; ?>
<main class="upHead">
        <div class="container">
            <div class="row">
                <? if($result):?>
                    <h4>Данные отредактированы</h4>
                <? else:?>
                <form action="" class="signUp" method="POST">
                    <h1>Редактирование данных</h1>
                    <? if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <? foreach ($errors as $error): ?>
                            <li> - <? echo $error; ?></li>
                        <? endforeach; ?>
                    </ul>
                <? endif;?>
                    <div class="form-row">
                        <div class="col-lg-6">
                            <label for="">Имя</label>
                            <input type="text" class="form-control" name="name" value="<? echo $name; ?>" require>
                        </div>
                        <div class="col-lg-6">
                            <label for="">Фамилия</label>
                            <input type="text" class="form-control" name="lastname" value="<? echo $lastname; ?>" require>
                        </div>
                    </div>
                    <label for="">Дата рождения</label>
                    <input type="date" class="form-control" name="birthDay" value="<? echo $birthDay ?>" require>
                    <label for="">Электронная почта</label>
                    <input type="email" class="form-control" name="email" value="<? echo $email ?>" require>
                    <input type="checkbox" value="true" name="check" id="check"> <label for="check">Изменить пароль?</label> <br>
                    <label for="">Пароль</label>
                    <input type="password" class="form-control" name="password" value="<? echo $password ?>" >
                    <label for="">Подтвердите пароль</label>
                    <input type="password" class="form-control" >
                    <button class="sign_button mt-4" name="submit" type="submit">Сохранить</button>
                 <? endif; ?>
                </form>
            </div>
        </div>
    </main>
<?php include ROOT . '/views/layouts/footer.php' ?>