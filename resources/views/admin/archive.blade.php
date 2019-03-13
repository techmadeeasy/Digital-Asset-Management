@extends('layouts.layout')

@section('content')
<div class="content">
<div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Edition  <small>List</small></h3><span> <a href="/archive-admin/2">2018</a> - <a href="/archive-admin/3" >2019</a></span>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr> <th class="text-center">ID</th>
                                        <th class="text-center">Preview</th>
                                        <th>Name</th>
                                        <th class="d-none d-sm-table-cell">Publication</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Date Created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($list as $l)
                                    <tr>
                                    <td class="font-w600">@php echo $num++ @endphp </td>
                                        <td class="text-center"><a href="/archive/{{ $l->id}}">
                                        <img class='img-fluid img-thumb' src='https://dkmzc8tghb19s.cloudfront.net/fit-in/250x250/uploads/{{ $l->thumbnail }}' alt='editon cover page'>
                                        </a> </td>
                                        <td class="font-w600">{{ $l->name}}</td>
                                        <td class="d-none d-sm-table-cell">{{ $l->magazine}}</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge ">{{ $l->created_at}}</span>
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
@endsection