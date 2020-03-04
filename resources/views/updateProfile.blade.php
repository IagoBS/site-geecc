@extends('layouts.template')
@section('title', 'Editar perfil')
@section('content')
<div class="container">
    <form action="{{route('perfil.update', $profile->id) }}" id="form" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="input-group-lg form-group">
            <label for="about">Editar sobre</label>
        <textarea name="about" id="about" cols="120" rows="10" class="form-control">{{$profile->about}}</textarea>
        </div>
        <div class="input-group-lg form-group">
            <label for="facebook">Editar Facebook</label>
        <input type="text" name="facebook" id="facebook" class="form-control" value="{{$profile->facebook}}">
        </div>
        <div class="input-group-lg form-group">
            <label for="twiiter">Editar twiiter</label>
        <input type="text" name="twiiter" id="twiiter" class="form-control" value="{{$profile->twiiter}}"  >
        </div>
        <div class="input-group-lg form-group">
            <label for="instagram">Editar instagram</label>
        <input type="text" name="instagram" id="instagram" class="form-control" value="{{$profile->instagram}}">
        <div class="input-group-lg form-group">
            <label for="avatar">Editar Foto de perfil</label>
        <input type="file" name="avatar" id="avatar" class="form-control-file" value="{{$profile->avatar}}">
        </div>
    </form>
    <button type="submit" form="form" class="btn btn-primary">Enviar</button>
</div>
@endsection
