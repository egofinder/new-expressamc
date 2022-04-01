<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="antialiased">
    <header>
        @include('layouts.header')
    </header>

    @yield('content')

    <footer>
        @include('layouts.footer')
    </footer>
</body>

</html>
