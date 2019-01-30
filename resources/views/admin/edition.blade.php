@extends('layouts/layout')

 
@section('content')
<div class="content">
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Add New Magazine Issue</h3>
                    
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            </div>
                        </div>
                        <div class="block-content">
<form method="post" class="form-group" action="{{url('subedition')}}" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="row">
        <div class="col-md-7">
              <div class="form-group row">    
                  <div class="col-12">
                      <label>Magazine Issue</label> 
                          <input type="text"  class="form-control" name="issue" >
                  </div>
            </div> 
        </div>

        <div class="col-md-5">
              <div class="form-group row">
                  <div class="col-12">
                      <label>Magazine</label><select class="custom-select" name="mag"> 
                          <option value="Cosmopolitan">Cosmopolitan</option>
                          <option value="House and Leisure">House and Leisure</option>
                          <option value="Good House Keeping">Good House Keeping</option>
                            </select>
                    </div>
                </div> 
          </div>
        </div>
          <!-- <div class="row"> -->
        <div class="row">
            <div class="col-md-7">
                <div class="form-group row">
                 <div class="col-12">
                      <label>Selling Terms</label>
                              <textarea class="form-control form-control-lg" id="mega-bio" name="terms" rows="22"></textarea>
                  </div>
                  </div>
              </div>
              <div class="col-md-5">
                <div  class="form-group row">    
                  <div class="col-12">
                  <label for="files">Month</label> <select class="form-control" name="month">
                          <option value="1">January</option>    
                          <option value="2">February</option> 
                          <option value="3">March</option>
                          <option value="4">April</option> 
                          <option value="5">May</option> 
                          <option value="6">June</option> 
                          <option value="7">July</option> 
                          <option value="8">August</option>  
                          <option value="9">September</option> 
                          <option value="10">October</option> 
                          <option value="11">November</option> 
                          <option value="12">December</option> 
                      </select>          
                  </div>
                </div>
                <div  class="form-group row">    
                  <div class="col-12">
                    <label for="year">Year of Publication</label> <select class="form-control" name="year">
                          <option value="2017">2017</option>    
                          <option value="2018">2018</option> 
                          <option value="2019">2019</option> 
                    </select>
                    </div>
                  </div>
                  <div  class="form-group row">    
                  <div class="col-12">
          <label for="file">Image cover</label><input type="file" name="image" class="form-control"/>
        </div>
        </div>
       

        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>
</div>
  </form> 
  </div>
                    <!-- END Mega Form -->
                <!-- END Page Content -->
               
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