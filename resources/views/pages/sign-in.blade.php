@include ('general.header')
<main class="upHead">
    <div class="prod__want">
        <div class="container">
            <div class="row center">
                <div class="form-controle">
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> - {{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <form action="#" class="sign" method="POST">
                        <h3>Вход в личный кабинет</h3>
                        <label for="">Логин</label>
                        <input type="email" name="email" class="form-control" placeholder="E-mail" value="{{ old('email') }}">
                        <label for="">Пароль</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <button class="sign_button mt-4" name="submit" type="submit">Войти</button>
                        <div class="registration">
                            <p class="center">Нет аккаунта?
                                <br> Жми
                                <a href="register" class="text-danger"><b>здесь</b></a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</main>
@include ('general.footer')
