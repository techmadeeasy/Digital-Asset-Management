@extends('layouts.layout')

@section('content')
@if(Auth::user()->role_id==1)
<div class="block-content">

                            <div class="row justify-content-center py-20">
                                <div class="col-xl-9">
                                    <!-- jQuery Validation (.js-validation-bootstrap class is initialized in js/pages/be_forms_validation.js) -->
                                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                    <form class="js-validation-bootstrap" action="/submit_search" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button type="submit" class="btn btn-secondary">
                                                            <i class="fa fa-search"></i> Search
                                                        </button>
                                                    </div>
                                                    <input type="text" class="form-control" id="example-input1-group2" name="seach" @isset($word) value="{{ $word}}" @endisset placeholder="eg: house.jpg">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        @isset($search)
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
                                        <th>Filename</th>
                                         <th>Feature</th>
                                          <th>Edition</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Photographer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($search as $srch)
                                    <tr>
                                        <th class="text-center" scope="row">3</th>
                                        <td><img src="#" alt="hello.jpg" srcset=""></td>
                                         <td class="d-none d-sm-table-cell">{{ $srch->filename}}</td>
                                        <td  class="d-none d-sm-table-cell">
                                           @php $alb = explode("," , $albums[$srch->album_id]); echo $alb[0] @endphp
                                        </td>
                                        <td  class="d-none d-sm-table-cell">
                                             {{ $alb[1]}}
                                        </td>
                                         <td  class="d-none d-sm-table-cell">
                                           {{ $alb[2]}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endisset
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
@else
<script>
window.location = "/create_edition"
</script>  
            
@endif
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
