@extends('layouts/layout')

@section('content')
<div class="content">
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Add New Article</h3>
                    
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            </div>
                        </div>
                        <div class="block-content">
      <form method="post" action="{{url('submit')}}" class="form-group" enctype="multipart/form-data">
              {{csrf_field()}}
          <div class="row">
              <div class="col-md-7">
                <div class="form-group row">    
                    <div class="col-12">
                          <label for="files">Album Name</label><input type="text" name="albumname" class="form-control" multiple="multiple"/>
                    </div>
                </div> 
              </div>
              <div class="col-md-5">
                <div class="form-group row">
                    <div class="col-12">
                        <label for="files">Category</label> <select class="form-control" name="cat" id="">
                              <option value="food and drink">Food and Drink</option>    
                              <option value="Houses">House</option>  
                              <option value="Lifestyle">Lifestyle</option>        
                              </select>
                      </div>
	                    </div>
                  </div>
            </div>
            <div class="row">
              <div class="col-md-7">
                  <div class="form-group row">
                        <div class="col-12">
                        <label>Description</label>
                    <textarea class="form-control form-control-lg" id="mega-bio" name="overview" rows="22"></textarea>
                        </div>
                  </div>
              </div>      
              <div class="col-md-5">
                  <div id="" class="form-group row">    
                          <div class="col-12">
          <label for="files">Magazine Issue</label><select class="form-control" name="albumedition" class="form-control">
          @foreach ($list as $l)
 <option value="{{$l->id}}">{{$l->name}} </option>  
       @endforeach
          </select>
              </div>
            </div>
            <div class="form-group row">    
                    <div class="col-12">
          <label for="files">Photographer</label><select class="form-control" name="albumphoto" class="form-control">
              <option value="none"></option>
          @foreach ($listcon as $con)
 <option value="{{$con->name}}">{{$con->name}} </option>  
       @endforeach
          </select>
        </div>
        </div>
        <div class="form-group row">    
              <div class="col-12">
          <label for="files">Image cover</label><input type="file" name="image" class="form-control"/>
        </div>
        </div>
              <div class="col-12">
        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>
        <div class="col-12">
    </div>
                                            </div>
   
  
 </div>
  </form> 
  </div>
      <!-- END Mega Form -->
                <!-- END Page Content -->
        </div>     
  </div>
@endsection

  <script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>
</body>
</html>