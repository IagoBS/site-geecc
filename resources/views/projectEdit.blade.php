@extends('layouts.template')
@section('title', 'GEEC - Editar projetos')
@section('content')
<div class="shadow-sm p-3 mb-5 bg-white rounded">
    <form action="{{route('projetos.update', $projects->id)}}" method="post" enctype="multipart/form-data" id="project">
        @csrf
        @method('put')
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
            <input type="name" name="name" id="name" class="form-control" value="{{$projects->name}}">
            </div>
            <div class="input-group-lg form-group">
                <label for="about">Sobre o projeto</label>
            <textarea name="about" id="about" cols="120" rows="10" >{{$projects->about}}</textarea>
            </div>

            <div class="input-group-lg form-group">
                <label for="descripition">Descrição do projeto</label>
            <textarea name="descripition" id="descripition" cols="120" rows="10" placeholder="Descrição do projeto">{{$projects->descripition}}</textarea>
            </div>
            <div class="input-group-lg form-group">
                <label for="logo">Logo do projeto</label>
                <input type="file" name="logo" id="logo" >
            </div>
    </form>
    <button type="submit" class="btn btn-primary" form="project">Editar...</button>
</div>
@endsection
