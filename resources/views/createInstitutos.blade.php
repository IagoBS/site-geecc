@extends('layouts.template') @section('title', 'Criar instituto') @section('content')

<div class="container">
    <form action="{{route('institutos.store')}}" method="post" id="institute">
        @csrf
        @if ($errors->any())
        <div class="alert alert-secondary">
            @foreach ($errors->all() as $error )
            <ul>
                <li>{{$error}}</li>
            </ul>
            @endforeach
            @endif

            <div class="input-group-lg form-group">
                <label for="name">Nome do instituto</label>
                <input type="name" name="name" id="name" class="form-control" placeholder="Escreva o seu email">
            </div>
            <div class="input-group-lg form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Escreva o seu email">
            </div>
            <div class="input-group-lg form-group">
                <textarea name="descripition" id="descripition" cols="120" rows="10"></textarea>
            </div>
            <div class="row">
                <div class="input-group-lg form-group">
                    <label for="logo">Escolha a logo do instituto</label>
                    <input type="file" name="logo" id="logo" placeholder="Logo do instituto">
                </div>
            </div>
    </form>
    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary" form="institute">Cadastrar</button>
    </div>
</div>

@endsection
