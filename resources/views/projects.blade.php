@extends('layouts.template')
@section('title', 'GEEC - Projetos')
@section('content')
<div class="shadow-sm p-3 mb-5 bg-white rounded">

@foreach ($projects as $project)
<div class="card" style="width: 18rem;">
<a href="{{url('projetos', $project->id)}}"><img src="" alt=""></a>
    <h5 class="card-title">{{$project->name}}</h5>
    <p class="card-text">{{$project->about}}</p>
    </div>
  </div>
@endforeach

</div>
@endsection
