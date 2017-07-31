@extends('layout.main_layout')

@section('title')
<title>Create New Post</title>
@endsection

@section('content')
<div class="grid-x" id="mainDiv">
    <div class="cell">

        <form>
            <h1>Create New Post</h1>

            <hr>

            <label>Title:
                <input type="text" v-model="title" placeholder="Title">
            </label>


            <label>Body:
                <textarea v-model="body" placeholder="Body" rows="4">
                </textarea>
            </label>

            <a class="button" @click="publish">Publish</a>
        </form>

    </div>
</div>
@endsection

@section('script')
<script>
    new Vue(
    {
        el: "#mainDiv",
        data:
        {
            title: null,
            body: null
        },
        methods:
        {
            publish: function ()
            {
                if(!_.isEmpty(this.title) && !_.isEmpty(this.body))
                {
                    var data = {title: this.title,
                                body: this.body}

                    axios.post('/posts', data);
                }
            }
        }
    });
</script>
@endsection