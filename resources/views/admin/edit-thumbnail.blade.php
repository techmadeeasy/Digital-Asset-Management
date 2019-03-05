@extends('layouts/layout')

 
@section('content')
<div class="content">
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
<form method="post" class="form-group" action="/update-thumbnail" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="row">
    <div class="col-md-12">
        <img class='img-fluid img-thumb' style="padding-left:30%" src='https://dkmzc8tghb19s.cloudfront.net/fit-in/150x150/uploads/{{ $get_thumb[0]->thumbnail }}' alt='editon cover page'>                             
    </div>
        <div class="col-md-12">
              <div class="form-group row">
                  <div class="col-12">
                      <label>Category</label><select class="custom-select" name="cat"> 
                      @foreach($category as $cat)
                          <option value=" {{ $cat->id}} ">{{$cat->name}}</option>
                          @endforeach
                            </select>
                    </div>
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
                      <input type="hidden" name="id" value="{{ $get_thumb[0]->id }}">        
                  </div>
                </div>
                  <div class="block">
                                <div class="block-content">
                                <h2> Tags</h2>
                                    <div class="row no-gutters items-push">
                                    @foreach($tags as $tag)
                    
                                    @if (in_array($tag->id, $list))
                                        <div class="col-6">
                                            <label class="css-control css-control-primary css-checkbox text-capital">
                                                <input type="checkbox" name="hellow[]" value="{{ $tag->id}}" class="css-control-input capitalize" checked="">
                                                <span class="css-control-indicator"></span> {{ $tag->name}}
                                            </label>
                                        </div>
                                    @else
                                    <div class="col-6">
                                            <label class="css-control css-control-primary css-checkbox text-capital">
                                                <input type="checkbox" name="hellow[]" value="{{ $tag->id}}" class="css-control-input capitalize">
                                                <span class="css-control-indicator"></span> {{ $tag->name}}
                                            </label>
                                        </div>
                                        @endif
                                        @endforeach
                                       
                                                        </div>
                                        
                                        <div class="form-material form-material-primary">
                                                    <input type="text" class="form-control" id="material-color-primary" name="new-tag" placeholder="eg: Rustic">
                                                    <label for="material-color-primary">Add new tag</label>
                                                </div>
                                        <div style="padding-left:40%">
                                        <button type="submit" class="btn btn-primary" style="margin-top:10px;">Submit</button>
                                        </div>
                                    </div>
                                   
                                </div>
                                
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