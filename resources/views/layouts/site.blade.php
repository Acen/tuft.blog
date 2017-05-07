<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tuft</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/site.css') }}" rel="stylesheet">
    <script>
        window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <header>
            <div class="brand">
                <div class="logo">{tuft}</div>
                <div class="sublogo">- co/nz -</div>
            </div>
        </header>
        <section>
            @yield('content')
        </section>
        <footer>
            <div class="title">{t}</div>
            <div class="copyleft">
                <a href="https://www.tuft.co.nz">Zac Bruce 2017</a>
            </div>
        </footer>
    </div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
