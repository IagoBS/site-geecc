@extends('layouts.template') @section('title', 'Criar notícia') @section('content')

<form action="{{route(news.store)}}" method="POST" enctype="multipart/form-data">
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-secondary text-center">
            @foreach ($errors->all() as $error )
            <ul>
                <li>{{$error}}</li>
            </ul>
            @endforeach
        </div>
        @endif
        <div class="d-flex justify-content-center h-100">
            <div class="row">
                <div class="col-sm-12">

                    <label for="name" class="text-center">Nome</label>
                    <select name="category" id="category">
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <input type="text" name="title" id="title" placeholder="Título da notícia">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <input type="text" name="content" id="content" placeholder="Texto da notícia">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <label for="image">Carregar imagem</label>
                    <input type="file" name="image" id="image">
                </div>
            </div>

        </div>
    </div>
</form>
@endsection
