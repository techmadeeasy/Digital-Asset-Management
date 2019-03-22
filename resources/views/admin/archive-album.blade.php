@extends('layouts.layout')

@section('content')
<div class="content">
<div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">{{ $edition[0]->name }} Edition  <small>Features</small></h3>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th class="text-center">Preview</th>
                                        <th>Name</th>
                                        <th class="d-none d-sm-table-cell">Description</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Contributor</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Date Created</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($get_album as $album)
                                    <tr>
                                     <td class="font-w600">@php echo $num++ @endphp </td>
                                        <td class="text-center"><a href="/archive/{{$album->id}}/thumbnail">
                                        <img class='img-fluid img-thumb' src='https://dkmzc8tghb19s.cloudfront.net/fit-in/250x250/uploads/{{ $album->thumbnail }}' alt='editon cover page'>
                                        </a> </td>
                                        <td class="font-w600">{{ $album->names}}</td>
                                        <td class="d-none d-sm-table-cell">{{ $album->description}}</td>
                                        <td class="d-none d-sm-table-cell">{{ $arrays[$album->photographer_id] }}</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge ">{{ $album->created_at}}</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a  class="btn btn-sm btn-secondary" href="/edit/{{ $album->id}}/album">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn btn-sm btn-secondary" href="/delete/{{ $album->id}}/album">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
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
