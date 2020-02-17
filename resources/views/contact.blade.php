
@extends('layouts.template')
@section('title', 'Contato')
@section('content')
<div class="container">
    <form action="{{route('contato.store')}}" method="post" id="form">
        @csrf

        @if ($errors->any())
        <div class="alert alert-secondary">
            @foreach ($errors->all() as $error )
            <ul>
                <li>{{$error}}</li>
            </ul>
            @endforeach
            @endif
            <div class="input-group-lg">

                <input type="text" name="name" id="name" placeholder="Escreva seu nome" class="form-control">
            </div>
            <div class="input-group-lg">
                <input type="email" name="email" id="email" placeholder="Escreva seu email" class="form-control">
            </div>
            <div class="input-group-lg">
                <input type="tel" name="telephone" id="telephone"  pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" placeholder="Escreva seu telefone()">
            </div>
            <div class="input-group-lg">
                <textarea name="message" id="message" cols="120" class="form-control" rows="10"></textarea>
            </div>
    </form>
    <button type="submit" form="form">Enviar</button>
</div>


@endsection
