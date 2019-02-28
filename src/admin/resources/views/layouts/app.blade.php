<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
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
                    @include('partials.messages')
                    @yield('content')
                </main>
                @endguest

            </div>
        </div>
    </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>

</html>
