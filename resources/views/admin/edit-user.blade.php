@extends('layouts.layout')

@section('content')
@if(Auth::user()->role_id==1)
<div class="block-content">

                            <div class="row justify-content-center py-20">
                                <div class="col-xl-6">
                                    <!-- jQuery Validation (.js-validation-bootstrap class is initialized in js/pages/be_forms_validation.js) -->
                                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                    <form class="js-validation-bootstrap" action="{{ route('update')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Full Name <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-name" name="name" placeholder="Enter a full name.." value="{{ $edit[0]->name}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-email" name="email" value="{{ $edit[0]->email}}" placeholder="Your valid email..">
                                                 <input type="hidden" class="form-control" id="val-email" name="id" value="{{ $edit[0]->id}}" placeholder="Your valid email..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-select2">Role <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <select class="js-select2 form-control" id="val-select2" name="role" style="width: 100%;" data-placeholder="Choose one..">
                                                   
                                                    <option value="{{$edit[0]->role_id}}">{{ $role[$edit[0]->role_id]}}</option>
                                                    @foreach($role as $r=>$val)
                                                        @if ($r!=$edit[0]->role_id)
                                                      <option value="{{$r}}">{{$val}}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        
                                            <div class="col-lg-8 ml-auto">
                                            @if(session()->has('message'))
                                          <p class="p-10 bg-success">{{session()->get('message')}}</p>
                                            @endif
                                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
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
