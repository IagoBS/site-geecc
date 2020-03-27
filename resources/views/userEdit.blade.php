@extends('layouts.dashboard')
@section('title', 'Editar usuário')
@section('dashboard')
<div class="col s12 m8 l12">
    @if ($errors->any())
        <div class="card-content red-text center">
            <ul>
            @foreach ($errors->all() as $error )
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

    <form action="{{route('usuario.update', $user->id)}}" id="form" method="POST">
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
                        <input name="name" type="text" value="{{$user->name}}">
                        <label for="name" class="center-align">Editar nome</label>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="material-icons prefix pt-2">mail_outline</i>
                        <input id="email" name="email" type="email" value="{{$user->email}}">
                        <label for="email" class="center-align">Editar email</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" name="about" id="about" value="{{$user->about}}">
                        <label for="about">Sobre você</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                    <select name="type" id="type" >
                        @if($user->type === 'user')
                        <option value="user" selected>Usuário</option>
                        <option value="admin" >Admin</option>
                        @else
                        <option value="admin" selected>Admin</option>
                        <option value="user">Usuário</option>
                        @endif
                        </select>

                    </div>
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
