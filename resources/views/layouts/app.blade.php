<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link rel="icon" href="{{asset('assets/img/core-img/favicon.ico')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        
        <!-- Scripts -->
        <script src="https://kit.fontawesome.com/5dfbc71075.js" crossorigin="anonymous"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{asset('assets/js/file-upload.js')}}"></script>
    </head>

    <body>
        @yield('content')
        <!-- Preloader -->
        @include('includes.preloader')
        <x-header>
            <x-nav/>
        </x-header>
        <x-footer/>
        <!-- jQuery-2.2.4 js -->
        <script src="{{asset('assets/js/jquery/jquery-2.2.4.min.js')}}"></script>
        <!-- Popper js -->
        <script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
        <!-- Bootstrap js -->
        <script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
        <!-- All Plugins js -->
        <script src="{{asset('assets/js/plugins/plugins.js')}}"></script>
        <!-- Active js -->
        <script src="{{asset('assets/js/active.js')}}"></script>
    </body>

</html>
