<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kayne West Quotes</title>

        <link rel="stylesheet" href="{{url('assets/bootstrap-5/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('assets/style.css')}}">
    </head>
    <body>
        @include('header')
        <section class="login min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    @yield('content')
                </div>
            </div>
        </section>

        <script src="{{url('assets/bootstrap-5/js/bootstrap.min.js')}}"></script>
        @stack('js')
    </body>
</html>
