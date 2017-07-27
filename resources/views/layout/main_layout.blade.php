<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf_token" content="{!! csrf_token() !!}">

        @yield('title')

        @include('layout.script')
    </head>

    <body>

        @include('layout.nav')

        <div class="grid-container grid-container-padded">
            @yield('content')
        </div>

        @yield('script')

    </body>

</html>
