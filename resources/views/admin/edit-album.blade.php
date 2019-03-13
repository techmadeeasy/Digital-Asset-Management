@extends('layouts/layout')

 
@section('content')
<div class="content">

                     @if(session()->has('message' ))
                        <p class="p-10 bg-success" style="color:#fff;">{{ session()->get("message") }}</p>
                                @endif
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Edit Image</h3>
                    
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            </div>
                        </div>
                        <div class="block-content">
<form method="post" class="form-group" action="/update-album" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="row">
    <div class="col-md-12">
        <img class='img-fluid img-thumb' style="padding-left:30%" src='https://dkmzc8tghb19s.cloudfront.net/fit-in/150x150/uploads/{{ $album[0]->thumbnail}}' alt='editon cover page'>                             
    </div>
        <div class="col-md-12">
              <div class="form-group row">
                  <div class="col-12">
                      <label class="col-form-label">Contributors</label><select class=" form-control" name="contrib"> 
                     <option value="{{ $album[0]->photographer }}"> {{ $album[0]->photographer }} </option>
                        @foreach ($contributors as $contrib)
                            @if ($contrib->name != $album[0]->photographer)
                           <option value="{{ $contrib->name}}"> {{ $contrib->name}}</option>
                             @endif
                        @endforeach
                            </select>
                    </div>
                </div> 
                <div class="form-group row">
                   <div class="col-12">
                        <label class="col-form-label" for="val-email">Title</label>
                                  <input type="text" class="form-control" id="val-email" name="name" value="{{ $album[0]->names}}" placeholder="Title..">
                                     <input type="hidden" class="form-control" id="{{ $album[0]->id}}" name="id" value="{{ $album[0]->id}}" placeholder="Your valid email..">
                            </div>
                     </div>
                      <div class="form-group row">
                   <div class="col-12">
                        <label class="col-form-label" for="val-email">Description</label>
                        </div>
                         <div class="col-12">
                                  <textarea name="desc" id="desc" class="form-control" cols="40" >{{ $album[0]->description}}</textarea>
                            </div>
                     </div>
                     <div style="padding-left:40%">
                                        <button type="submit" class="btn btn-primary" style="margin-top:10px;">Update</button>
                                        </div>
          </div>
        </div>
          <!-- <div class="row"> -->
        <div class="row">
              <div class="col-md-12">
                <div  class="form-group row">    
                  <div class="col-12">
                  <!-- <label for="files">Tags</label> <select class="form-control" name="month">
                 
                          <option value="dsds">dsddd</option>  
                      
                      </select>   -->
                       
                  </div>
                </div>
  </form> 
  </div>
                    <!-- END Mega Form -->
                <!-- END Page Content -->
               
  </div>
  <style>
  .content {
      width:41%;
  }
  .text-capital{
      text-transform:capitalize!important;
  }
  </style>
@endsection