@include ('general.header')
<main class="upHead">
    <div class="prod__want">
        <div class="container">
            <div class="row">
                <div class="form-control">
                    @if($status === "OK")
                        <h2>Сообщение отправлено!</h2>
                        <h4>Мы ответим вам на указанный вами E-mail.</h4>
                    @else
                        @if (!$errors->isEmpty())
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li> - {{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form action="/contact" class="sign" method="POST">
                            @csrf
                            <h3>Обратная свзяь</h3>
                            <label for="">Введите ваш E-mail</label>
                            <input type="email" name="email" class="form-control" placeholder="E-mail" value="{{ old('email') }}">
                            <label for="">Ваше сообщение</label>
                            <textarea type="text" name="message" rows="5" class="form-control">{{ old('message') }}</textarea>
                            <button class="sign_button mt-4" name="submit" type="submit">Отправить</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>

</main>
@include ('general.footer')
