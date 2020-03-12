@extends('layouts.template') @section('title', 'Institutos') @section('content')
<div class="container">

    <div class="row">
        <br>

        <div class="col s12 center-align">

            <h3>Institutos e órgãos mantidos pelo GEEC</h3>
            <br>
            <hr>
        </div>
        <div class="row">
            @foreach ($institutes as $institute)
            <div class="col s12 m6 l6">
                <div class="card">
                    <div class="card-image">
                        <img src="{{url('/storage/' .$institute->logo)}}" alt="{{$institute->name}}"> <span
                            class="card-title center">{{$institute->name}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
