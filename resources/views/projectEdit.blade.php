@extends('layouts.dashboard')
@section('title', 'GEEC - Editar projetos')
@section('dashboard')
<div class="shadow-sm p-3 mb-5 bg-white rounded">
    @if ($errors->any())
    <div class="alert alert-secondary">
        @foreach ($errors->all() as $error )
        <ul>
            <li>{{$error}}</li>
        </ul>
        @endforeach
        @endif
        <h1 class="center">Editar Projeto</h1>
        <form action="{{route('projetos.update', $projects->id)}}" method="post" enctype="multipart/form-data"
            id="project">
            @csrf
            @method('put')
            <div class="row margin">
                <div class="input-field col s12">
                    <label for="name">Nome do projeto</label>
                    <input type="text" name="name" id="name" value="{{$projects->name}}">
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <select name="institute_id" id="institute_id" class="custom-select">
                        @foreach ($institutes as $institute)
                        <option value="{{$institute->id}}">{{$institute->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <label for="about">Sobre o projeto</label>
                    <textarea name="about" id="about" cols="120" rows="10">{{$projects->about}}</textarea>
                </div>
            </div>

            <div class="row margin">
                <div class="input-field col s12">
                    <label for="descripition">Descrição do projeto</label>
                    <textarea name="descripition" id="descripition" cols="120" rows="10"
                        placeholder="Descrição do projeto">{{$projects->descripition}}</textarea>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <input type="file" name="logo" id="logo" >
                </div>
            </div>

        </form>
        <button type="submit" class="btn btn-primary" form="project">Editar...</button>
    </div>
    @endsection
