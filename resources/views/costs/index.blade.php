@extends('layout.main_layout')

@section('title')
<title>All Costs</title>
@endsection

@section('content')
<div class="grid-x" id="mainDiv">
    <div class="cell">

        <table>
            <tr v-for="(cost, index) in costs">
                <td v-for="(co, idx) in cost">
                    <a v-text="idx + ':' + co" :href="'/costs/' + cost.id"></a>
                </td>
            </tr>
        </table>

    </div>
</div>
@endsection

@section('script')
<script>
    var costs = {!! json_encode($costs) !!};

    var mainVue = new Vue({
        el: "#mainDiv",
        data: {
            costs: costs
        }
    });
</script>
@endsection