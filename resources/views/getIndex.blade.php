@extends('layouts.template')
@section('title', 'Editar notícia')
@section('content')
<div class="content">

    <div class="d-flex justify-content-center">
      
    </div>
    <div class="row">
        <img src="" alt="" class="img-fluid">
    </div>
    <div class="shadow-sm p-3 mb-5 bg-white rounded">
        <p>
            {{ $news->content }}
        </p>
    </div>

    <a href="{{url('news/' . $news->id . '/edit')}}">Update da notícia</a>

    <div class="d-flex justify-content-center">
    <form action="{{route('news.destroy', $news->id)}}" id="destroy" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" form="destroy">Deletar</button>
    </form>
    </div>
    @endsection
