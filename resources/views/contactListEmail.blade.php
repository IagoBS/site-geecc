@extends('layouts.dashboard')
@section('title', 'Listar Contato')
@section('dashboard')
<br>

<table class="table invoice-data-table white border-radius-4 pt-1 dataTable
    no-footer" id="DataTables_Table_0" role="grid">
    <thead>
        <tr role="row">
            <th class="control sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 46px;"></th>
            <th class="dt-checkboxes-cell dt-checkboxes-select-all
                sorting_disabled" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 46px;" data-col="1" aria-label=""><input type="checkbox"></th>
            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Invoice#
                : activate to sort column descending" style="width: 236px;">
                <span>Nomes#</span>
            </th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 228px;">Email</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 162px;">Telefone</th>

        </tr>
    </thead>
    <tbody>












        <tr role="row" class="odd">
            <td class="control"></td>
            <td class="dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes"></td>
            <td class="sorting_1">
                Iago
            </td>
            <td><span class="invoice-amount">lolololadawd@gmail.com</span></td>
            <td><span class="invoice-amount">Telefone</span></td>
            <td>
                <div class="invoice-action">
                    <a href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/app-invoice-view" class="invoice-action-view mr-4">
                        <i class="material-icons">remove_red_eye</i>
                    </a>
                    <a href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/app-invoice-edit" class="invoice-action-edit">
                        <i class="material-icons">edit</i>
                    </a>
                </div>
            </td>
        </tr>

    </tbody>
</table>
@endsection
