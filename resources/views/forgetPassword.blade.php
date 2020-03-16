@extends('layouts.template')
@section('title', 'Recuperar senha')
@section('content')
    <div class="container">
        <form action="{{route('forget.store')}}" method="post" id="form">
            @csrf
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="material-icons prefix pt-2">person_outline</i>
                   <input type="password" name="password" id="password" >
                    <label for="password" class="center-align">Nova senha</label>
                </div>
            </div>
        </form>
    </div>
@endsection
