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
              <a href="{{route('news.show', $noticia->slug)}}" class="waves-effect waves-light btn gradient-45deg-red-pink">[...] Ver notícia</a>
              </div>
            </div>
          </div>
        @endforeach
    </div>
</div>
@endsection
