@extends('layouts.template')
@section('title', 'GEEC - Listar email')
@section('content')
<table class="table">
    <thead class="table-primary">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Telefone</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($contact as $contacts)
            <tr>
          <th scope="row">{{$contacts->id}}</th>
          <td>{{$contacts->name}}</td>
          <td>{{$contacts->email}}</td>
          <td>{{$contacts->telephone}}</td>

        </tr>
            @endforeach

    </tbody>
  </table>


@endsection
