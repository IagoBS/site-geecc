@extends('layouts.template')
@section('title', 'GEEC')
@section('content')
<h1 class="text-center">{{$institute->name}}</h1>
<p>{{$institute->descripition}}</p>
<a href="{{url('institutos/' . $institute->id . '/edit')}}">Editar instituto</a>
<form action="{{route('institutos.destroy', $institute->id)}}" id="destroy" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" form="destroy">Deletar</button>
</form>
@endsection
