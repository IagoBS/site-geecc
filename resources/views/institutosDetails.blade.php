@extends('layouts.template')
@section('title', 'GEEC')
@section('content')




    <br>

    <div class="card-content card-border-gray">
        <div class="row">
            <div class="col s12 center-align">
                <img class="responsive-img circle z-depth-5" width="160" height="150"
                    src="{{url('storage/' . $institutes->logo)}}" alt="">

    <h3>{{$institutes->name}}</h3>
                <br>
                <p>{!! $institutes->descripition !!}</p>
                <hr>
            </div>
        </div>
    </div>


<div class="container">

    <div class="row">
        @foreach($news as $noticia)
        <div class="col s12 m6 l6">
            <div class="card">
              <div class="card-image">
              <img src="{{url('storage/' . $noticia->gallery[0]->photo)}}" alt="sample"> <span class="card-title center black">{{$noticia->title}}</span>
              </div>
              <div class="card-content">
                <p>

                </p>
              </div>
              <div class="card-action">
              <a href="{{route('news.show', $noticia->slug)}}" class="waves-effect waves-light btn gradient-45deg-red-pink">[...] Continuar leitura</a>
              </div>
            </div>
          </div>
        @endforeach
    </div>

</div>

@endsection
