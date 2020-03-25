@extends('layouts.template')
@section('title', 'Recuperar senha')
@section('content')

    <div class="container">

        <form action="{{route('forget.update')}}" method="post" id="form">
            @csrf
            @method('put')
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="material-icons prefix pt-2">person_outline</i>
                   <input type="password" name="password" id="password" >
                    <label for="password" class="center-align">Nova senha</label>
                <input type="hidden" name="token" value="{{$token}}">
                </div>
            </div>
        </form>
        <button type="submit" class="btn blue" form="form">Trocar senha</button>
    </div>
@endsection
