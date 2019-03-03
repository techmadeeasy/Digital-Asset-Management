
@extends('layouts.layout')

@section('content')
<div class="content">
<div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">{{ $album_name[0]->names }} Edition  <small>Features</small></h3>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 15%;">Preview</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Category</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Tags</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($get_thumb as $thumb)
                                    <tr>
                                        <td class="text-center" style="height:150px;padding:0px;">
                                        <img class='img-fluid img-thumb' src='https://dkmzc8tghb19s.cloudfront.net/fit-in/150x150/uploads/{{ $thumb->thumbnail }}' alt='editon cover page'>
                                        </td>
                                        <td class="font-w600" style="height:150px;padding:0px;">{{ $thumb->category }}</td>
                                        <td class="d-none d-sm-table-cell" style="height:150px;padding:0px;"> {{ $thumb->keywords }}</td>
                                        <td class="text-center" style="height:150px;padding:0px;">
                                            <div class="btn-group">
                                                <a  class="btn btn-sm btn-secondary" href="/edit/{{ $thumb->id}}">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn btn-sm btn-secondary" href="/delete/{{ $thumb->id}}/thumbnail">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <style>
                                    .table-vcenter td, .table-vcenter th {
                                        vertical-align: middle;
                                        }
                                    </style>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                    <style>
                    @media (min-width: 1200px){
                    #page-container.main-content-narrow>#main-container .content, #page-container.main-content-narrow>#page-footer .content, #page-container.main-content-narrow>#page-header .content, #page-container.main-content-narrow>#page-header .content-header{
                        max-width:65%;
                    }}
                    </style>
@endsection