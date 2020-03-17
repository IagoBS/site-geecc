@extends('layouts.dashboard')
@section('title', 'Editar ou remover usuários')
@section('dashboard')
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
                <span>Nome#</span>
            </th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                aria-label="Amount: activate to sort column ascending" style="width: 228px;">Email
            </th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                aria-label="Date: activate to sort column ascending" style="width: 162px;">Permissão
            </th>

            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                aria-label="Date: activate to sort column ascending" style="width: 162px;">Ver 
            </th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
            aria-label="Date: activate to sort column ascending" style="width: 162px;">
            editar
            </th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                aria-label="Amount: activate to sort column ascending" style="width: 228px;">Excluir
            </th>

        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)

        <tr role="row" class="odd">
            <td class="control"></td>
            <td class="dt-checkboxes-cell">
                <input type="checkbox" class="dt-checkboxes">
            </td>
            <td class="sorting_1">
                {{$user->name}}
            </td>
            <td><span class="invoice-amount">{{$user->email}}</span></td>
        <td><span class="invoice-amount">{{$user->type}}</span></td>
            <td>

                <div class="invoice-action">
                    <a href="{{route('usuario.show', $user->id)}}" class="invoice-action-view mr-4">
                        <i class="material-icons">remove_red_eye</i>
                    </a>


                </div>
            </td>
            <td>
                <a href="{{route('usuario.edit', $user->id)}}" class="invoice-action-edit">
                    <i class="material-icons">edit</i>
                </a>
            </td>
            <td>
                <div class="invoice-action">
                    <form action="{{route('usuario.destroy', $user->id)}}" method="post" id="form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" form="form" class="btn blueSi">Excluir</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection
