<!DOCTYPE html>
<html lang="ru">
    @include('web.layouts.head')
    <body>
        @include('web.layouts.header')
        <main class="main-container">
            @yield('content')
        </main>
        @include('web.layouts.footer')
    </body>
</html>
