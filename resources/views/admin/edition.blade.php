<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edition</title>
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

@guest 
<script type="text/javascript">
    window.location = "{{ url('/login') }}";//here double curly bracket
</script>

@else

    <h3 class="jumbotron">Create New Edition</h3>
<form method="post" action="{{url('subedition')}}" enctype="multipart/form-data">
  {{csrf_field()}}

        <div class="input-group control-group increment" >
          <label for="files">Magazine Issue</label><input type="text" name="issue" class="form-control" multiple="multiple"/>
        </div>
        <div class="input-group control-group increment" >
          <label for="files">Month</label> <select class="form-control" name="month" id="">
              <option value="1">January</option>    
              <option value="2">February</option> 
              <option value="3">March</option> 
          </select> 
          </div>
        <div class="input-group control-group increment" >
          <label for="files">Year of Publication</label> <select class="form-control" name="year" id="">
              <option value="2017">2017</option>    
              <option value="2018">2018</option> 
              <option value="2019">2019</option> 
          </select>
        </div>
        <div class="input-group control-group increment" >
          <label for="files">Magazine</label> <select class="form-control" name="mag" id="">
              <option value="House and Leisure">House and Leisure</option>    
              <option value="cosmopolitan">Cosmopolitan</option>  
          </select>
        </div>
        <div class="input-group control-group increment" >
          <label for="files">Image cover</label><input type="file" name="image" class="form-control"/>
        </div>
       

        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

  </form>        
  </div>
 
@endguest
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