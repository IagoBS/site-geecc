@extends('layouts.template')
@section('title', 'GEEC - Projeto x')

@section('content')
<div class="shadow-sm p-3 mb-5 bg-white rounded">
<h1 class="text-center">{{$projects->name}}</h1>
<p>{{$projects->about}}</p>
</div>
<a href="{{url('projetos/' . $projects->id . '/edit')}}">editar projeto</a>
<form action="{{route('projetos.destroy', $projects->id)}}" id="destroy" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" form="destroy">Deletar</button>
</form>
@endsection
