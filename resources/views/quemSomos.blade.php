@extends('layouts.template')
@section('title', 'Quem somos')
@section('content')
<div class="container">
    @foreach ($institucional as $quemSomos)

    <h1 class="center">Quem somos</h1>
<p>{{$quemSomos->about}}</p>
    <div class="row">
        <div class="col s12 l4">
            <img class="promo" src="{{asset('imagens/missao.png')}}" height="200px" width="300px">
            <h4 class="center">Missão</h4>
        <p>{{$quemSomos->mission}}</p>
            <br>
        </div>

        <div class="col s12 l4">
            <img class="promo" src="{{asset('imagens/valoreds.jpg')}}" height="200px" width="300px">
            <h4 class="center">Valores</h4>
        <p>{{$quemSomos->values}}</p>
            <br>
        </div>

        <div class="col s12 l4">
            <img class="promo" src="{{asset('imagens/visao.jpeg')}}" height="200px" width="300px">
            <h4 class="center">Visão</h4>
        <p>{{$quemSomos->vision}}</p>
        </div>
    </div>
</div>
@endforeach
@endsection
