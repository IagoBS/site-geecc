@extends('layouts.dashboard')
@section('title', 'Criar rede social')
@section('dashboard')
<div class="container">
    <form action="{{route('rede-social.store')}}" method="post" id="form" enctype="multipart/form-data">
    @csrf
    @if ($errors->any())
    <div class="alert alert-secondary text-center">
        <ul>
            @foreach ($errors->all() as $error )
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h1 class="center">Adicionar rede social</h1>
    <div class="row margin">
        <div class="input-field col s12">
            <input type="text" name="name" id="name">
            <label for="name">Nome da rede social</label>
        </div>
    </div>
    <div class="row margin">
        <div class="input-field col s12">
            <input type="text" name="url" id="url">
            <label for="url">URL da rede social</label>
        </div>
    </div>
<div class="row margin">
    <div class="input-field col s12">
        <input type="file" name="icone" id="icone">
    </div>
</div>
    </form>
    <button type="submit" form="form" class="btn blue">Adicionar rede Social</button>
</div>
@endsection
