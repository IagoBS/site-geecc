@extends('layouts.template') @section('title', 'Editar notícia') @section('content')
<div class="container">

    <div class="card card-content card-border-gray">
        <div class="row">
            <div class="col s12 center-align">
                <h1>{{$news->title}}</h1>
                <hr>
            </div>

        </div>
        <p class="flow-text">{{$news->content}}</p>
    </div>

</div>
@endsection
