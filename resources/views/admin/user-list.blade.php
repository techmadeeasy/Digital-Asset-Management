@extends('layouts.layout')

@section('content')
@if(Auth::user()->role_id==1)
<div class="content">
<div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Users  <small></small></h3> <a class="btn btn-primary" href="#">Add New User</a>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th class="text-center">Profile</th>
                                        <th>Name</th>
                                        <th class="d-none d-sm-table-cell">Email</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Role</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Date Created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($list as $ls)
                                    <tr>
                                        <td class="text-center"><a href="#">
                                        <img class='img-fluid img-thumb' src='#' alt='{{ $ls->name}} photo'>
                                        </a> </td>
                                        <td class="font-w600">{{ $ls->name}}</td>
                                        <td class="d-none d-sm-table-cell">{{ $ls->email}}</td>
                                        <td class="d-none d-sm-table-cell">{{ $rs[$ls->role_id] }}</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge ">{{ $ls->created_at}}</span>
                                        </td>
                                       
                                    </tr>
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
@else
<script>
window.location = "/create_edition"
</script>                   
@endif

@endsection
