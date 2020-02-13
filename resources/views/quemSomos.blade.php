@extends('layouts.template')
@section('title', 'Quem somos')
@section('content')
<div class="container">
    @foreach ($institucional as $quemsomos)
{{ $quemsomos->about }}
{{ $quemsomos->values }}
{{ $quemsomos->values }}

    @endforeach

</div>
@endsection
