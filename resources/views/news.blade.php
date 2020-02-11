@extends('layouts.template') @section('title', 'GEEC - Grupo de Educação Ética e Cidadania') @section('content')
<div class="container">


    <div class="col-12 col-md-4 mb-3">
        @foreach ($news as $noticia)
        <div class="card mb-5">
        <a href="{{url('/news/' . $noticia->id )}}"><img src="" alt=""></a>
            <div class="card-body">
            <h3 class="text-center">{{$noticia->title}}</h3>
            </div>
            <div class="card-footer">
            <h6>{{$noticia->content}}</h6>
            </div>
        </div>
        @endforeach
        {{ $news }}
    </div>
    @endsection
