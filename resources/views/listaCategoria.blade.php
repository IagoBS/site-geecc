@extends('layouts.dashboard')
@section('title', 'Lista Categoria')
@section('dashboard')

<table class="table invoice-data-table white border-radius-4 pt-1 dataTable
    no-footer" id="DataTables_Table_0" role="grid">

    <thead>
        <tr role="row">
            <th class="control sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 46px;"></th>

            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                aria-sort="ascending" aria-label="Invoice#
                : activate to sort column descending" style="width: 236px;">
                <span>Nome#</span>
            </th>


            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                aria-label="Date: activate to sort column ascending" style="width: 162px;">editar
            </th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                aria-label="Date: activate to sort column ascending" style="width: 162px;">Excluir
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr role="row" class="odd">

            <td class="control"></td>
            <td class="dt-checkboxes-cell">{{$category->name}}</td>
           
            <td>
                <div class="invoice-action">

                    <a href="{{route('category.edit', $category->id)}}" class="invoice-action-edit">
                        <i class="material-icons">edit</i>
                    </a>
                </div>
            </td>
            <td>
                <div class="invoice-action">
                    <form action="{{route('category.destroy', $category->id)}}" method="post" id="form">
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
