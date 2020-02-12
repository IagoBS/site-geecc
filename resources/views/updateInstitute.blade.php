@extends('layouts.template')
@section('title', 'Editar instituto')
@section('content')
<div class="shadow-sm p-3 mb-5 bg-white rounded">
    <form action="{{route('institutos.update', $institutes->id)}}" method="post" id="update" enctype="multipart/form-data">
        @csrf
        @method('put')
        <h1 class="text-center">EDITAR INSTITUTO</h1>
        <div class="input-group-lg form-group">
            <label for="name">Editar nome do instituto</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $institutes->name }}">
        </div>
        <div class="input-group-lg form-group">
            <label for="email">Mudar email do instituto</label>
         <input type="email" name="email" id="email" value="{{$institutes->email}}" class="form-control">
        </div>
        <label for="project">Mudar projeto</label>
        <div class="input-group-lg mb-3">
            <select name="project" id="project" class="custom-select">
                @foreach ($projects as $project)
                <option value="{{$project->id}}" >{{$project->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="input-group-lg mb-3">
            <label for="descripition">Editar descrição do instituto</label>
        <textarea name="descripition" id="descripition" cols="120" rows="10">{{$institutes->descripition}}</textarea>
        </div>
        <div class="input-group-lg form-group">
            <input type="file" name="logo" id="logo">
        </div>
    </form>
    <button type="submit" form="update" class="btn btn-primary">Editar...</button>
</div>
@endsection
