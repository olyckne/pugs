@extends('layouts.default')

@section('content')
    <div class="row center-block text-center">
        <h1>Hi, nice to meet you! <br>
            @yield('subtitle', "Here's a pug!")
        </h1>

        <div class="row pug-container">
            @yield('pug')
        </div>

        <h2>You're welcome.</h2>
        <a href="/" class="btn btn-primary">I want a new one!</a>
        <a href="/bomb" class="btn btn-primary">I want more!</a>
    </div>
@stop
