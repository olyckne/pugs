@extends('layouts.pug')

@section('pug')
    @section('subtitle', 'Let there be pugs!')
    @foreach($pugs as $pug)
        <div class="col-sm-6 pug-col-sm">
            @include('partials.pug')
        </div>
    @endforeach
@stop
