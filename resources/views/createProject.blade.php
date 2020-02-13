@extends('layouts.template')
@section('title', 'Criar projeto')
@section('content')

<div class="container">
    <form action="{{route('projetos.store')}}" method="post" id="project" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
        <div class="alert alert-secondary">
            @foreach ($errors->all() as $error )
            <ul>
                <li>{{$error}}</li>
            </ul>
            @endforeach
            @endif
            <div class="input-group-lg form-group">
                <label for="name">Nome do projeto</label>
                <input type="name" name="name" id="name" class="form-control" placeholder="Escreva o seu email">
            </div>
            <div class="input-group-lg form-group">
                <select name="institute" id="institute" class="custom-select">
                    @foreach ($institutes as $institute)

                    <option value="{{$institute->id}}">{{$institute->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group-lg form-group">
                <label for="about">Sobre o projeto</label>
                <textarea name="about" id="about" cols="120" rows="10" placeholder="Escreva sobre o projeto"></textarea>
            </div>

            <div class="input-group-lg form-group">
                <label for="descripition">Descrição do projeto</label>
                <textarea name="descripition" id="descripition" cols="120" rows="10" placeholder="Descrição do projeto"></textarea>
            </div>
            <div class="input-group-lg form-group">
                <label for="logo">Logo do projeto</label>
                <input type="file" name="logo" id="logo" >
            </div>
    </form>
    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary" form="project">Cadastrar projeto</button>
    </div>
</div>
@endsection
