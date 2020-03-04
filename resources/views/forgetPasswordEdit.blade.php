@extends('layouts.template') @section('title', 'Recuperar senha') @section('content')
<h1 class="text-center">Recuperar senha</h1>
<form action="{{route('forget.update')}}" method="post" id="form">
    @csrf @method('put')
    <label for="password">Nova senha</label>
    <input type="password" name="password" id="password" placeholder="Nova senha">
    <input type="hidden" name="token" value="{{$token}}">
</form>
<button type="submit" form="form" class="btn btn-primary">Enviar</button> @endsection