@extends('layouts.dashboard')
@section('title', 'Registrar usuário')
@section('dashboard')
<div class="col s12 m8 l12">
<form class="{{route('usuario.store')}}" method="POST" enctype="multipart/form-data" id="form">
    @csrf
    @csrf
    @if ($errors->any())
    <div class="card-content red-text center">
        <ul>
        @foreach ($errors->all() as $error )
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
        <div class="row">
            <div class="input-field col s12">
                <h5 class="ml-4 center">Registrar usuário</h5>

            </div>
        </div>
        <div class="row margin">
            <div class="input-field col s12">
                <i class="material-icons prefix pt-2">person_outline</i>
                <input id="name" name="name" type="text">
                <label for="name" class="center-align">Nome</label>
            </div>
        </div>
        <div class="row margin">
            <div class="input-field col s12">
                <i class="material-icons prefix pt-2">mail_outline</i>
                <input id="email" name="email" type="email">
                <label for="email">Email</label>
            </div>
        </div>
        <div class="row margin">
            <div class="input-field col s12">
                <i class="material-icons prefix pt-2">lock_outline</i>
                <input id="password" type="password" name="password">
                <label for="password">Senha</label>
            </div>
        </div>
        <div class="row margin">
           <div class="input-field col s12">
               <i class="material-icons prefix pt-2">account_box</i>
                <textarea name="about" id="about" cols="120" rows="30"></textarea>
                <label for="about">Escreva mais sobre você</label>
            </div>
        </div>
        <div class="row margin">
            <input type="file" name="photo" id="photo">
            <label for="">Sua foto de perfil
            </label>
        </div>

    </form>
    <div class="row">
        <div class="input-field col s12">
            <button type="submit" form="form" class="btn blue">Registrar</button>
        </div>
    </div>
</div>
@endsection
