
@extends('layouts.template')
@section('title', 'Registrar usuário')
@section('content')

<div class="container">

        <div class="flex justify-content-center h-100">
            <div class="card">
                <div class="card-group card-header text-center">
                </div>
                <h3 class="text-center ">Criar conta</h3>

                <form action="{{route('registro.store')}}" id="form" method="POST" class="form-group">
                    @csrf
                    @if ($errors->any())
                    <div class="alert alert-secondary">
                        @foreach ($errors->all() as $error )
                        <ul>
                            <li>{{$error}}</li>
                        </ul>
                        @endforeach
                        @endif
                    </div>
                    <label for="name" class="text-center">Nome</label>
                    <div class="input-group-lg mb-3">
                        <input type="text" name="name" id="name" class="form-control i" placeholder="Escreva seu nome">
                    </div>


                    <div class="input-group-lg form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Escreva o seu email">
                    </div>
                    <div class="input-group-lg form-group">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Escreva o sua senha">
                    </div>

                </form>
                
                <button type="submit" form="form" class="btn btn-primary" class="group">Cadastrar</button>


@endsection
