@extends('site/layout')
@section('title', 'Home Page')
@section('content')

<div class="container valign-wrapper">

    <div>
        <h1 class="black-text" style="font-size:80px;">Welcome to <span style="color: blue; font-size:100px; font-weight:600;">MulaStats</span></h1>
        <h4>Here you will see the CS2 statistics of a group of friends who are mules.</h4>
    </div>
    <div class="right">
            <img src="{{asset('img/mula.png')}}">
    </div>

</div>

@endsection