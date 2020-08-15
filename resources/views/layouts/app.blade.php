<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

     <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="{{ asset('fonts/vendor/font-awesome/fontawesome-webfont.ttf') }}" rel="stylesheet">
</head>
<body>



    <div class="container">
        <div class="row">
            <h3>@yield('title')</h3>
        </div>
        <hr>
        @yield('content')
    </div>



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
