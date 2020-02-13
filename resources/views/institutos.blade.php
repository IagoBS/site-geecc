@extends('layouts.template')
@section('title', 'Institutos')
@section('content')
<h1 class="text-center">Institutos e órgãos mantidos pelo GEEC</h1>
@foreach ($institutes as $institute)

<div class="d-flex flex-column bd-highlight mb-3">
   <div class="card" style="width: 18rem;">

   <a href="{{url('institutos/' . $institute->id)}}"><img src="" alt=""></a>
        <div class="card-body">
        <h5 class="card-title">{{$institute->name}}</h5>
            <p class="card-text"></p>
        <p>{{$institute->descripition}}</p>
        </div>
    </div>
</div>
@endforeach
@endsection
