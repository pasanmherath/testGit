@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Data Table</div>

                    <div class="panel-body">
                        <table class="datatable mdl-data-table dataTable" cellspacing="0"
                               width="100%" role="grid" style="width: 100%;">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
