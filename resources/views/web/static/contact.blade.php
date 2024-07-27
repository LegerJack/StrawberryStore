@extends('web.app')
@section('content')
    <div class="prod__want">
        <div class="container">
            <div class="row">
                @if(!empty($status) && $status === "OK")
                    <h2>Сообщение отправлено!</h2>
                    <h4>Мы ответим вам на указанный вами E-mail.</h4>
                @else
                    <form action="/contact" class="sign" method="POST">
                        @csrf
                        <h3>Обратная свзяь</h3>
                        <label for="email" class="form-label">Введите ваш E-mail</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" value="{{ old('email') }}">
                        @error('email')
                            <div class="form-text">
                                Неверный e-mail
                            </div>
                        @enderror
                        <label for="message" class="form-label">Ваше сообщение</label>
                        <textarea type="text" name="message" id="message" rows="5" class="form-control">{{ old('message') }}</textarea>
                        @error('message')
                        <div class="form-text">
                            Ошибка обработки сообщения
                        </div>
                        @enderror
                        <button class="sign_button mt-4" name="submit" type="submit">Отправить</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection
