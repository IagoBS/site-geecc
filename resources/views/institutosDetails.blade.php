@extends('layouts.template')
@section('title', 'GEEC')
@section('content')
<div class="col s12 center-align">

<h3>{{$institutes->name}}</h3>
    <br>

    <hr>
</div>
<div class="container">
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
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
