@extends('layout.main_layout')

@section('title')
<title>Blog</title>
@endsection

@section('content')
<div class="grid-x" id="mainDiv">
    <div class="cell">
        <h1>Blog</h1>

        <a class="button" href="/posts/create">Create A New Post</a>

        <hr>

        <div v-for="post in posts">
            <h3>
                <a :href="'/posts/' + post.id" v-text="post.title"></a>
            </h3>

            <span v-text="post.created_at"></span>

            <p v-html="post.body"></p>

            <hr>
        </div>

    </div>
</div>
@endsection

@section('script')
<script>
    var posts = {!! json_encode($posts) !!};

    new Vue({
        el: "#mainDiv",
        data: {
            posts: posts
        }
    });
</script>
@endsection