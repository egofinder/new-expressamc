<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>

<body class="flex-auto antialiased">
    <header>
        @include('layouts.header')
    </header>


    <div class="inline-flex">
        <div class="h-screen"> @yield('sidebar')
        </div>
        <div class="w-screen"> @yield('content')
        </div>
    </div>
    <footer>
        @include('layouts.footer')
    </footer>
    @yield('scripts')
</body>

</html>
