@extends('layouts.dashboard')
@section('title', 'Editar usuário')
@section('dashboard')
<div class="col s12 m8 l12">
<form action="{{route('usuario.update', $users->id)}}" id="form">
    @csrf
    @method('put')
        <div class="row">
            <div class="input-field col s12">
                <p class="center">
                    Editar usuário
                </p>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="material-icons prefix pt-2">person_outline</i>
                    <input id="name" type="text" value="{{$users->name}}">
                        <label for="name" class="center-align">Editar nome</label>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="material-icons prefix pt-2">mail_outline</i>
                    <input id="email" type="email" value="{{$users->email}}">
                        <label for="email" class="center-align">Editar email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="input-field col s12"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                    <input type="text" name="about" id="about" value="{{$users->about}}">
                        <label for="about">Sobre você</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">

                       <div class="switch">
                        <label>
                          user
                        <input  type="checkbox" name="type" value="{{$users->type}}">
                          <span class="lever"></span>
                          admin
                        </label>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="file" name="photo" id="photo">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <button type="submit" form="form" class="btn blue">Editar</button>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('select');
      var instances = M.FormSelect.init(elems);
    });
  </script>
@endsection
