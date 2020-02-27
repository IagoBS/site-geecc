@extends('layouts.template')
@section('title', 'Ediar Quem somos')
@section('content')
<div class="container">
    <div class="shadow-sm p-3 mb-5 bg-white rounded">
        <h1 class="text-center">Inserir quem somos</h1>
        <form action="" method="post" id="form">
            @csrf
            @method('put')
            <label for="about">Sobre o GEEC</label>
            <div class="input-group-lg form-group">
            <textarea name="about" id="about" cols="120" rows="10" class="form-control" placeholder="Sobre">{{$institucional->about}}</textarea>
            </div>
            <div class="input-group-lg mb-3">
                <label for="mission">Missão</label>
            <textarea name="mission" id="mission" cols="120" rows="10" class="form-control">{{$institucional->mission}}</textarea>
            </div>
            <div class="input-group-lg mb-3">
                <label for="vision">Visão</label>
            <textarea name="vision" id="vision" cols="120" rows="10" class="form-control" placeholder="Visão">{{$institucional->vision}}</textarea>
            </div>
            <div class="input-group-lg">
                <label for="values">Valores</label>
            <textarea name="values" id="values" cols="120" class="form-control" rows="10">{{$institucional->values}}</textarea>
            </div>
        </form>
        <button type="submit" class="btn btn-primary" form="form">Enviar</button>
    </div>
</div>
@endsection
