@extends('layouts.template')
@section('title', 'Criar Perfil')
@section('content')
<div class="container">
    <form action="{{route('perfil.store')}}" method="post" enctype="multipart/form-data" class="my-5" id="form">
        @csrf
        @if ($errors->any())
        <div class="alert alert-secondary">
            @foreach ($errors->all() as $error )
            <ul>
                <li>{{$error}}</li>
            </ul>
            @endforeach
            @endif
            <div class="input-group-lg form-group" >
                <select name="user_id" id="user_id" class="custom-select">
                    @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group-lg form-group">
                <label for="about">Sobre você</label>
                <textarea name="about" id="about" cols="120" rows="10" placeholder="Escreva um pouco sobre você"></textarea>
            </div>
            <div class="input-group-lg form-group">
                <label for="facebook">Facebook</label>
                <input type="text" name="facebook" id="facebook" class="form-control">
            </div>
            <div class="input-group-lg form-group">
                <label for="twiiter">Twitter</label>
                <input type="text" name="twiiter" id="twiiter" placeholder="@" class="form-control">
            </div>
            <div class="input-group-lg form-group">
                <label for="instagram">Instagram</label>
                <input type="text" name="instagram" id="instagram" placeholder="Instagram" class="form-control">
            </div>
            <div class="input-group-lg">
                <label for="avatar">Foto de perfil</label>
                <input type="file" name="avatar" id="avatar" placeholder="Foto de perfil" class="form-control-file">
            </div>
    </form>
    <button type="submit" form="form" class="btn btn-primary">Enviar</button>
</div>
@endsection
