@extends('layouts.template')
@section('title', 'Perfil')
@section('content')
<div class="container">
    <br>

    <div class="card-content card-border-gray">
        <div class="row">
            <div class="col s12 center-align">
                <img class="responsive-img circle z-depth-5" width="160" height="150"
                    src="{{url('storage/' . $user->photo)}}" alt="">
                <h5>{{$user->name}}</h5>
                <br>
                <h6>{{$user->about}}</h6>
                <hr>
            </div>
        </div>
    </div>

    @foreach($news as $noticia)
    <div class="row mt-2">
        <div class="col s12 m6 l4 card-width">
            <div class="card-panel border-radius-6 mt-10 card-animation-1">

                <a href="{{url('/news' . "/" . $noticia->slug)}}">
                    @if(count($noticia->gallery) > 0)
                    <img class="responsive-img border-radius-8 z-depth-4 image-n-margin"
                        src="{{url('storage/' . $noticia->gallery[0]->photo)}}" alt="images">
                    @endif
                </a>
                <h6><a href="#" class="mt-5">{{$noticia->title}}</a></h6>

                <p class="">Criado em: {{date('d/m/Y H:i', strtotime($noticia->created_at))}}</p>
                <p><span>Categoria: {{$noticia->category->name}}</span></p>
                <p><span>Autor: {{$noticia->user->name}}</span></p>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection
