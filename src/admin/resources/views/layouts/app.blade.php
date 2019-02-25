<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        @include('partials.nav')
        <div class="container-fluid">
            <div class="row">
                @guest
                <main class="pt-3 container">
                    @yield('content')
                </main>
                @else
                @include('partials.sidebar')
                <main class="pt-3 main-container">
                    @yield('content')
                </main>
                @endguest

            </div>
        </div>
    </div>
</body>

</html>