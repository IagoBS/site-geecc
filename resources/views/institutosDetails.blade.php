@extends('layouts.template')
@section('title', 'GEEC')
@section('content')
<div class="col s12 center-align">

<h3>{{$institute->name}}</h3>
    <br>
    <hr>
</div>
<div class="row">
    @foreach($projects as $project)
    <div class="col s12 m6 l6">
        <div class="card">
            <div class="card-image">
            <img src="{{$project->logo}}" alt="{{$project->name}}"> <span class="card-title">{{$project->name}}</span>
                </div>
                <div class="card-content">
                    <p>
                    <span>Descrição: </span> {{ $project->descripition }}
                    </p>
                <p>Sobre o projeto: {{$project->about}}</p>
                </div>
            </div>
        </div>
    </div>
    
    @endforeach
</div>
@endsection
