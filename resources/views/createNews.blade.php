@extends('layouts.template') @section('title', 'Criar notícia') @section('content')
<div class="container">


    <div class="flex justify-content-center h-100">
        <div class="card">
            <div class="card-group card-header text-center">
            </div>
            <h3 class="text-center ">Criar conta</h3>

            <form action="{{route('news.store')}}" id="form" method="POST" class="form-group" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                <div class="alert alert-secondary">
                    @foreach ($errors->all() as $error )
                    <ul>
                        <li>{{$error}}</li>
                    </ul>
                    @endforeach
                    @endif
                </div>
                <label for="title" class="text-center">Título da notícia</label>
                <div class="input-group-lg mb-3">
                    <input type="text" name="title" id="name" class="form-control i" placeholder="Escreva da notícia">
                </div>
                <label for="author">Autor Teste</label>
                <div class="input-group-lg mb-3">
                    <select name="author" id="author" class="custom-select">
                        @foreach ($authors as $author)
                        <option value="{{$author->id}}">{{$author->name}}</option>
                        @endforeach
                    </select>
                </div>
                <label for="title" class="text-center">Categoria</label>
                <div class="input-group-lg mb-3">
                    <select name="category" id="category" class="custom-select">
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <label for="content">content</label>
                <div class="input-group-lg form-group">
                    <textarea name="content" id="content" cols="120" rows="10"></textarea>
                </div>
                <div class="input-group-lg form-group">
                    <input type="file" name="image" id="image">
                </div>
            </form>
            <button type="submit" form="form" class="btn btn-primary">Cadastrar</button>
        </div>

    </div>
</div>
@endsection
