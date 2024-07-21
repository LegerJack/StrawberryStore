@include ('general.header')
<main class="upHead">
    <div class="prod__want">
        <div class="container">
            <div class="row">
                <div class="form-control">
                    @if ($errors->any())
{{--                    <h2>Сообщение отправлено!</h2>--}}
{{--                    <h4>Мы ответим вам на указанный вами E-mail.</h4>--}}
{{--                    <? else : ?>--}}
{{--                        <?php if (isset($errors) && is_array($errors)) : ?>--}}
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li> - {{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <form action="#" class="sign" method="POST">
                        @csrf
                        <h3>Обратная свзяь</h3>
                        <label for="">Введите ваш E-mail</label>
                        <input type="email" name="userEmail" class="form-control" placeholder="E-mail" value="{{ old('userEmail') }}">
                        <label for="">Ваше сообщение</label>
                        <textarea type="text" name="userText" rows="5" class="form-control" value="{{ old('userText') }}"></textarea>
                        <button class="sign_button mt-4" name="submit" type="submit">Отправить</button>
                    </form>
{{--                    <?// endif; ?> --}}
                </div>
            </div>
        </div>
    </div>

</main>
@include ('general.footer')
