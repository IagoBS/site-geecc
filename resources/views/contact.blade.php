@extends('layouts.template')
@section('title', 'Contato')
@section('content')
        <div class="container">
        <form action="{{route('contato.store')}}" method="POST" id="form">
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
                    <i class="material-icons prefix pt-2">accessibility</i>
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="row margin">
                    <i class="material-icons prefix pt-2">email</i>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="row margin">
                    <i class="material-icons prefix pt-2">tablet_android</i>
                    <label for="telephone">Telefone</label>
                    <input type="tel" name="telephone" id="telephone">
                </div>
                <div class="row margin">
                    <i class="material-icons prefix pt-2">accessibility</i>
                    <label for="message">Messagem</label>
                   <textarea name="message" id="message" cols="120" rows="10"></textarea>
                </div>
            </form>
            <button type="submit" form="form" class="btn blue">Enviar</button>
        </div>
@endsection
