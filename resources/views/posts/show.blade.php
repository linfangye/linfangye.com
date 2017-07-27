@extends('layout.main_layout')

@section('title')
<title>Single Post</title>
@endsection

@section('content')
<div class="grid-x" id="mainDiv">
    <div class="cell">

        <div v-for="(po, key) in post">
            <span v-text="key + ':' + po">
            </span>
        </div>

    </div>
</div>
@endsection

@section('script')
<script>

    var post = {!! json_encode($post) !!};

    new Vue({
        el: "#mainDiv",
        data: {
            post: post
        }
    });
</script>
@endsection