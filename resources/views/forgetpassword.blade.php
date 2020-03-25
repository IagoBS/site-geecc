@extends('layouts.template')
@section('title', 'Recuperar senha')
@section('content')
<div class="container">
    @isset($status)
    <div class="card-content white-text">
        <p>Foi enviada uma solitação para recuperação de senha no seu email</p>
      </div>
    @endisset
    <h1 class="center">Recuperar senha</h1>
    
    <form action="{{route('forget.store')}}" method="post" id="form">
        @csrf
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

    <button type="submit" form="form" class="btn btn-primary">Enviar</button>
    @endsection
</div>

