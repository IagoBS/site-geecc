@extends('layouts.template')
@section('title', 'Editar notícia')
@section('content')
<div class="content">

    <div class="d-flex justify-content-center">
    <h1>{{$news->title}}</h1>
    </div>
    <div class="row">
    <img src="" alt="" class="img-fluid">
    </div>
    <div class="shadow-sm p-3 mb-5 bg-white rounded">

        <p>
        {{ $news->content }}
        </p>
    </div>

</div>
@endsection
