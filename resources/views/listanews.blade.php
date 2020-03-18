@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('dashboard')

<form action="{{route('serach.news')}}" method="post">
@csrf
<div id="search-wrapper" class="card z-depth-0 search-image center-align p-35">
    <div class="input-field inline">

      <input placeholder="Pesquisar" id="first_name" name="filter" class="search-box validate white search-circle search-shadow">
      <button type="submit" class="btn blue"><i class="material-icons">search</i></button>
    </div>
  </div>
</form>
<table class="table invoice-data-table white border-radius-4 pt-1 dataTable
    no-footer" id="DataTables_Table_0" role="grid">

    <thead>
        <tr role="row">
            <th class="control sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 46px;"></th>
            <th class="dt-checkboxes-cell dt-checkboxes-select-all
                sorting_disabled" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                style="width: 46px;" data-col="1" aria-label=""><input type="checkbox"></th>
            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                aria-sort="ascending" aria-label="Invoice#
                : activate to sort column descending" style="width: 236px;">
                <span>Título#</span>
            </th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                aria-label="Amount: activate to sort column ascending" style="width: 228px;">Autor
            </th>

            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                aria-label="Date: activate to sort column ascending" style="width: 162px;">Categoria
            </th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                aria-label="Date: activate to sort column ascending" style="width: 162px;">Ver ou editar
            </th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                aria-label="Date: activate to sort column ascending" style="width: 162px;">Excluir
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($news as $noticia)
        <tr role="row" class="odd">

            <td class="control"></td>
            <td class="dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes"></td>
            <td class="sorting_1">
                {{$noticia->title}}
            </td>
            <td><span class="invoice-amount">{{$noticia->user->name}}</span></td>
            <td><span class="invoice-amount">{{$noticia->category->name}}</span></td>
            <td>
                <div class="invoice-action">
                    <a href="{{route('news.show', $noticia->slug)}}" class="invoice-action-view mr-4">
                        <i class="material-icons">remove_red_eye</i>
                    </a>

                    <a href="{{route('news.edit', $noticia->id)}}" class="invoice-action-edit">
                        <i class="material-icons">edit</i>
                    </a>
                </div>
            </td>
            <td>
                <div class="invoice-action">
                    <form action="{{route('news.destroy', $noticia->id)}}" method="post" id="form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn blueSi">Excluir</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection
