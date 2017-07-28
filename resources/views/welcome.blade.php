@extends('layout.main_layout')

@section('title')
<title>Fangye Lin's Homepage</title>
@endsection

@section('content')
<div class="grid-x" id="mainDiv">
    <div class="cell">

        <h1>Website Under Construction</h1>

    </div>
</div>
@endsection

@section('script')
<script>

    new Vue({
        el: "#mainDiv",
        data: {
            mytext: 'checked'
        }
    });
</script>
@endsection