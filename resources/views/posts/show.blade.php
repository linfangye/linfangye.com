@extends('layout.main_layout')

@section('title')
<title>Single Post</title>
@endsection

@section('content')
<div class="grid-x" id="mainDiv">
    <div class="cell">

        <h1 v-text="post.title"></h1>
        <h5 class="subheader" v-text="post.created_at"></h5>

        <hr>

        <div class="callout success large" v-html="post.body"></div>

        <hr>


        <blockquote v-for="comment in post.comments" v-text="comment.body + ' ' + comment.created_at"></blockquote>

        <div class="callout">

            <label>Body:
                <textarea v-model="body" placeholder="Place your comments here" rows="4"></textarea>
            </label>

            <a class="button" @click="publish">Publish</a>

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
            post: post,
            body: ""
        },
        methods: {
            publish: function()
            {
                if(!_.isEmpty(this.body))
                {
                    var data = {body: this.body}

                    axios.post('/posts/' + this.post.id + '/comments', data)
                        .then(function ()
                        {
                            window.location.href = "/posts/" + this.post.id;
                        });
                }
            }
        }
    });
</script>
@endsection