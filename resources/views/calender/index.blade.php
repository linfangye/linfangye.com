@extends('layout.main_layout')

@section('title')
<title>Fangye Lin's Homepage</title>
@endsection

@section('content')
<div id="calendar"></div>
@endsection

@section('script')
<script>
    $(document).ready(function() {

        $('#calendar').fullCalendar({
        })

    });
</script>
@endsection