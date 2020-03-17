@extends('layouts.dashboard')
@section('title', 'Editar Categoria')
@section('dashboard')
<h1 class="center">Editar categoria</h1>
<form action="{{route('category.update', $category->id)}}" method="post" id="form">
@csrf
@method('put')
<label for="name">Editar nome  da categoria</label>
<input type="text" name="name" id="name" value="{{$category->name}}">
</form>
<button type="submit" class="btn blue" form="form">Enviar</button>
@endsection
