@extends('layouts.dashboard')
@section('title', 'Criar categoria')
@section('dashboard')
<h1 class="center">
    Criar categoria
</h1>
<form action="{{route('category.store')}}" method="post" id="form">
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
<div class="row margin">
    <div class="input-field col s12">
        <label for="name">Nome da categoria</label>
        <input type="text" name="name" id="name">
    </div>
</div>
</form>
<button type="submit" form="form" class="btn blue">Enviar</button>
@endsection
