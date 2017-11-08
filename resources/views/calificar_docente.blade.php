
@extends('layouts.header')




@section('header')
@if (!Auth::guest())
    @parent
@endif
@endsection

@section('content')

@if (!Auth::guest())

<div class="jumbotron">


</div>


@else

<?php
header("Location: /");
die();
?>

@endif

@endsection
