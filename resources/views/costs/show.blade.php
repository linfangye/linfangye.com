@extends('layout.main_layout')

@section('title')
<title>Single Cost</title>
@endsection

@section('content')
<div class="grid-x" id="mainDiv">
    <div class="cell">

        <div v-for="(cost, key) in costs">
            <span v-text="key + ':' + cost">
            </span>
        </div>

    </div>
</div>
@endsection

@section('script')
<script>

    var cost = {!! json_encode($cost) !!};

    new Vue({
        el: "#mainDiv",
        data: {
            costs: cost
        }
    });
</script>
@endsection