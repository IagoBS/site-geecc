@extends('layouts.template')
@section('title', 'Recuperar senha')
@section('content')
    <div class="container">
        <form action="{{route('forget.store')}}" method="post" id="form">
            @csrf
            <div class="input-group-lg form-group">
                <label for="email">Seu endereço de email</label>
                <br>
                <input type="text" name="email" id="email" class="form-control-lg my-2" >
            </div>
            <button type="submit" form="form" class="btn btn-block">Enviar</button>
        </form>
    </div>
@endsection
