<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @yield('title')

        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.css' />
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.1/css/foundation.min.css' />
        <link rel='stylesheet' href='https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css' />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.1/js/foundation.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
        <script src="https://unpkg.com/vue@2.4.2"></script>
    </head>

    <body>

        @include('layouts.nav')

        <div class="grid-container grid-container-padded">
            @yield('content')
        </div>

        @yield('script')

    </body>

</html>
