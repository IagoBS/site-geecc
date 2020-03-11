@extends('layouts.template') @section('title', 'Recuperar senha') @section('content')
<div class="container">
    <h1 class="center">Recuperar senha</h1>
    <form action="{{route('forget.update')}}" method="post" id="form">
        @csrf @method('put')
        <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="material-icons prefix pt-2">person_outline</i>
                    <input id="email" name="email" type="text">
                    <label for="email" class="center-align">Email</label>
                </div>
            </div>

        </div>
    </form>

    <button type="submit" form="form" class="btn btn-primary">Enviar</button> @endsection
</div>

