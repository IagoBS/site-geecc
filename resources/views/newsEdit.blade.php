@extends('layouts.dashboard')
@section('title', 'Editar Notícia')
@section('dashboard')

<div class="container">
    <div class="shadow-sm p-3 mb-5 bg-white rounded">
        <form action="{{route('news.update', $news->id)}}" method="post" id="form">
            @csrf
            @method('put')
            <div class="alert alert-secondary">
                @foreach ($errors->all() as $error )
                <ul>
                    <li>{{$error}}</li>
                </ul>
                @endforeach
            </div>
            <label for="title">Editar título do texto</label>
            <div class="input-group-lg mb-3">
            <input type="text" name="title" id="title" class="form-control i" value="{{$news->title}}">
            </div>
            <label for="author">Autor Teste</label>
            <div class="input-group-lg mb-3">
                <select name="author" id="author" class="custom-select">
                    @foreach ($authors as $author)
                    <option value="{{$author->id}}">{{$author->name}}</option>
                    @endforeach
                </select>
            </div>
            <label for="category">Editar categoria da notícia</label>
            <div class="input-group-lg mb-3">
                <select name="category" id="category" class="custom-select">
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <label for="content">Editar Contéudo da notícia</label>
            <div class="input-group-lg mb-3">
                <textarea name="content" id="content" class="form-control " cols="120" rows="10">
                    {{ $news->content }}
                </textarea>
            </div>
        </form>
        <button type="submit" form="form" class="btn btn-primary">Editar...</button>
    </div>
</div>
@endsection
