@extends('layouts.template') @section('title', 'Editar notícia') @section('content')
<div class="container">

    <div class="card card-content card-border-gray">
        <div class="row">
            <div class="col s12 center-align">
                <h5 class="center"><img class="responsive-img border-radius-8 z-depth-4 img-fluid" width="800" height="800" src="{{url('storage/' . $news->gallery[0]->photo)}}" alt="images"></h5>
                <h1>{{$news->title}}</h1>
                <hr>
            </div>

        </div>
        <p class="flow-text">{!! $news->content !!}</p>
    </div>

</div>
@endsection
