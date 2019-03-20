@extends('layouts.layout')

@section('content')
<div class="block-content">
<div class="row justify-content-center py-20">
                                <div class="col-xl-9">
                        <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Search result</h3>
                            <div class="block-options">
                                <div class="block-options-item">
                                    <code>search</code>
                                </div>
                            </div>
                        </div>
                        <div class="block-content">
                            <table class="table table-bordered table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 50px;">#</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                         <th>Email</th>
                                          <th>Telephone</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($contributors as $contrib)
                                 
                                    <tr>
                                        <th class="text-center" scope="row">{{ $counter++}}</th>
                                        <td><img  src="#" alt="image" class="img-fluid" style="width:100%;max-width:100px"></td>
                                         <td class="d-none d-sm-table-cell">{{ $contrib->name}}</td>
                                        <td  class="d-none d-sm-table-cell">
                                          {{$contrib->email }}
                                        </td>
                                        <td  class="d-none d-sm-table-cell">
                                             {{ $contrib->phone}}
                                        </td>
                                         <td  class="d-none d-sm-table-cell">
                                          <a href="/contrib/{{ $contrib->id }}" class="btn btn-primary" >view</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                            </div>
                    <style>
                    @media (min-width: 1200px){
                    #page-container.main-content-narrow>#main-container .content, #page-container.main-content-narrow>#page-footer .content, #page-container.main-content-narrow>#page-header .content, #page-container.main-content-narrow>#page-header .content-header{
                        max-width:65%;
                    }}
                    .bg-success {
                        color: #fff;
                        }
                    </style>
<script src="assets/js/pages/be_forms_validation.js"></script>
   <script src="assets/js/plugins/select2/select2.full.min.js"></script>
        <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="assets/js/plugins/jquery-validation/additional-methods.min.js"></script>

        <!-- Page JS Code -->
        <script>
            jQuery(function () {
                // Init page helpers (Select2 plugin)
                Codebase.helpers('select2');
            });
        </script>
        <script src="assets/js/pages/be_forms_validation.js"></script> 
@endsection
