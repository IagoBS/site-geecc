@extends('layouts.template')
@section('title', 'GEEC - Projetos')
@section('content')
<div class="container">

    <div class="row margin">

        <div class="row">
            @foreach($projects as $project)
            <div class="col s12 m6 l6">
                <div class="card">
                  <div class="card-image">
                  <img src="{{url('storage/' . $project->logo)}}" alt="sample"> <span class="card-title center black">{{$project->name}}</span>
                  </div>
                  <div class="card-content">
                    <p>

                    </p>
                  </div>
                  <div class="card-action">
                  <a href="{{route('projetos.show', $project->id)}}" class="waves-effect waves-light btn gradient-45deg-red-pink">[...] Ver projeto</a>
                  </div>
                </div>
              </div>
            @endforeach
        </div>
    </div>

</div>

@endsection
