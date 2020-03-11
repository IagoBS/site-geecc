@extends('layouts.dashboard')
 @section('title', 'Criar instituto')
 @section('dashboard')

<div class="container">
    <form action="{{route('institutos.store')}}" method="post" id="form" enctype="multipart/form-data">
        @csrf @if ($errors->any())
        <div class="alert alert-secondary">
            @foreach ($errors->all() as $error )
            <ul>
                <li>{{$error}}</li>
            </ul>
            @endforeach
        </div>
        @endif

        <div class="row margin">
            <div class="input-field col s12">
                <i class="material-icons prefix pt-2">account_circle</i>
                <label for="name">Nome do instituto</label>
                <input type="text" name="name" id="name">
            </div>
        </div>
        <div class="row margin">
            <div class="input-field col s12">
                <i class="material-icons prefix pt-2">email</i>
                <label for="email">Email do instituto</label>
                <input type="email" name="email" id="email">
            </div>
        </div>

        <div class="row margin">
            <div class="input-field col s12">
                <i class="material-icons prefix pt-2">wrap_text</i>
                <textarea name="descripition" id="descripition" cols="120" class="materialize-textarea" rows="100" id="textarea1"></textarea>
            </div>
        </div>
        <div class="row margin">
            <input type="file" name="logo" id="logo">
        </div>
    </form>
    <br>
    <button type="submit" class="btn blue" form="form">Criar Instituto</button>

</div>

@endsection
