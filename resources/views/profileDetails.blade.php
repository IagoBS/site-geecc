@extends('layouts.template')
@section('title', 'Articulistas')
@section('content')
    <div class="container">
        <div class="shadow-sm p-3 mb-5 bg-white rounded my-5">
            {{ $profile->avatar }}
            {{ $profile->about }}
            {{ $profile->facebook }}
            {{ $profile->instagram }}
        {{ $profile->twiiter }}
        </div>
    </div>
@endsection
