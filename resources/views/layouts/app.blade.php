<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
        <title>{{config('app.name')}}</title>
        <link rel="icon" href="{{asset('assets/img/core-img/favicon.ico')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <script src="https://kit.fontawesome.com/5dfbc71075.js" crossorigin="anonymous"></script>
    </head>
    <body>
        @yield('content')
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