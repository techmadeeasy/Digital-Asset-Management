<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel Multiple File Upload Example</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

  <div class="container">
  @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      @if(session('success'))
   <div class="alert alert-success">
      {{ session('success') }}
   </div> 
 @endif

    <h3 class="jumbotron">Create New Article/Album</h3>
<form method="post" action="{{url('submit')}}" enctype="multipart/form-data">
  {{csrf_field()}}

        <div class="input-group control-group increment" >
          <label for="files">Album</label><input type="text" name="albumname" class="form-control" multiple="multiple"/>
        </div>
        <div class="input-group control-group increment" >
          <label for="files">Category</label> <select class="form-control" name="cat" id="">
              <option value="food and drink">Food and Drink</option>    
              <option value="Houses">House</option>  
              <option value="Lifestyle">Lifestyle</option>        
          </select>
        </div>
        <div class="input-group control-group increment" >
          <label for="files">Edition</label><input type="text" name="albumedition" class="form-control" multiple="multiple"/>
        </div>
        <div class="input-group control-group increment" >
          <label for="files">Photographer</label><input type="text" name="albumphoto" class="form-control" multiple="multiple"/>
        </div>

       

        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

  </form>        
  </div>
 

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