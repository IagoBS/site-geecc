@extends('layouts.dashboard')
 @section('title', 'Criar notícia')
 @section('dashboard')
<div class="container">
    <h3 class="center ">Criar notícia</h3>
    <form action="{{route('news.store')}}" id="form" method="POST" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
        <div class="card-content red-text center">
            <ul>
            @foreach ($errors->all() as $error )
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="row margin">
            <div class="input-field col s12">
                <i class="material-icons prefix pt-2">create</i>
                <input type="text" name="title" id="title">
                <label for="title">Título da notícia</label>
            </div>
        </div>
        <div class="row margin">
            <i class="material-icons prefix pt-2">create</i>
            <select name="category">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="row margin">
            <div class="input-field col s12">
                <i class="material-icons prefix pt-2">wrap_text</i>
                <textarea name="content" id="cotent" cols="120" class="materialize-textarea" rows="100"
                    id="textarea1"></textarea>
            </div>
        </div>
        <div class="row margin">
            <div class="input-field col s12">
                <input type="file" name="image" id="image" multiple>

            </div>
        </div>
    </form>
    <button type="submit" form="form" class="btn btn-primary" >Criar notícia</button>

</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems);
    });

</script>
@endsection
