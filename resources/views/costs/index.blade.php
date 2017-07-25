<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fangye Lin's Homepage</title>

</head>
<body>


    <div class="grid-container grid-container-padded" id="mainDiv">
        <div class="grid-x">
            <div class="cell">

                <table>
                    <tr v-for="(cost, index) in costs">
                        <td v-for="(co, idx) in cost">
                            <a v-text="idx + ':' + co" :href="'/cost/' + cost.id"></a>
                        </td>
                    </tr>
                </table>

            </div>
        </div>
    </div>


    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.1/css/foundation.min.css' />
    <link rel='stylesheet' href='https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css' />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.1/js/foundation.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://unpkg.com/vue@2.4.2"></script>

    <script>

        var costs = {!! json_encode($costs) !!};

        var mainVue = new Vue({
            el: "#mainDiv",
            data: {
                costs: costs
            }
        });

    </script>
</body>
</html>
