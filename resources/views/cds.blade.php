@extends('layouts.layout')

@section('header')
    <img src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="">
@endsection

@section('content')

    @foreach ($cds as $cd)
        <div class="cd col-4 text-center text-white">
            <div class="box">
                <img src="{{ $cd['poster'] }}" />
                <h3>{{ $cd['title'] }}</h3>
                <small>{{ $cd['author'] }}</small>
                <strong>{{ $cd['year'] }}</strong>

            </div>
        </div>
    @endforeach

@endsection