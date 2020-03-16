@extends('layouts.dashboard')
@section('title', 'Criar categoria')
@section('dashboard')
<h1 class="center">
    Criar categoria
</h1>
<form action="{{route('category.store')}}" method="post" id="form">
@csrf
<div class="row margin">
    <div class="input-field col s12">
        <label for="name">Nome da categoria</label>
        <input type="text" name="name" id="name">
    </div>
</div>
</form>
<button type="submit" form="form" class="btn blue">Enviar</button>
@endsection
