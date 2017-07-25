<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fangye Lin's Homepage</title>

</head>
<body>


    <div id="mainDiv">

        <div id="calendar"></div>
    </div>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.css' />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src="https://unpkg.com/vue@2.4.2"></script>


    <script>
        $(document).ready(function() {

            $('#calendar').fullCalendar({
            })

        });

        new Vue({
            el: "#mainDiv",
            data: {
                message: 'test'
            }
        });
    </script>
</body>
</html>
