@extends('layouts.template')
@section('title', 'GEEC - Projeto x')

@section('content')
<div class="section  blue darken-3 ">
    <div class="container">
        <div class="row">
            <div class="col s12 m6 ">
            <h5 class="start white-text">{{$projects->name}}</h5>
                <p class="white-text">
                </p>
                <ul class="lista-template">
                   {{ $projects->descripition }}
                </ul>
            </div>
            <div class="col s6 offset-s3 m6 center">
            <img class="responsive-img" src="{{url('/storage/' . $projects->logo)}}">
            </div>
        </div>

    </div>
</div>

@endsection
