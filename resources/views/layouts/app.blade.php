<!DOCTYPE html>
<html lang="{{ config('app.locale', 'en') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">
        @yield('styles')

        <!-- Scripts -->
        <script type="text/javascript">
            window.Laravel = {!! json_encode(['csrfToken' => csrf_token() ]) !!}
        </script>
    </head>
    <body>
        <div id="app">
            @include('layouts.partials.navbar')

            <div class="container">
                @include('layouts.partials.flashes')
            </div>

            @yield('content')
        </div>

        <!-- Scripts -->
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        @yield('scripts')
    </body>
</html>
