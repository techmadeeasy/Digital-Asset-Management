@extends('layouts.frontend')

@section('content')
                <div class="col-md-2">
<<<<<<< HEAD
                @foreach($album_thumb as $imf)
                        <h2 style="font-family: 'Open Sans', sans-serif; font-weight: 100;"> {{$imf->names}} </h2>
                        <h5>Content</h5>
                        <p style="margin:none;"> Number of images: {{ count($images)}}</p>
=======
                        <h2 style="font-family: 'Open Sans', sans-serif; font-weight: 100;"></h2>
                        <h5>Content</h5>
                        <p style="margin:none;"> Number of images: {{ count($images)}}</p>
                        @foreach($album_thumb as $imf)
>>>>>>> 1b360367b41186be9c2cdd235eecc62e8003ad60
                        <p>Text: {{ $imf->description}}</p>
                        <h5 class="mt_10">Details </h5>

                        <p>Photographer: <strong></strong>
                        <p>Copyright: <strong>© syndication-bazaar</strong></p> 
                        <h5 class="mt_10">Rights</h5>
                    <p> <a style="color:#0bb4b1;" href="terms.php">Licence Agreements</a></p>
                </div> 
                <div class="col-md-4">  
               
                           
                    <img  src="https://dkmzc8tghb19s.cloudfront.net/fit-in/600x600/uploads/{{ $imf->thumbnail}}" alt="placeholder" class="img-fluid">
                    @endforeach

                    
                </div>  
<<<<<<< HEAD
                <div class="col-md-3">

<!-- Trigger the Modal -->
@foreach($images as $img)
<img id="{{ ++$count}}" onclick="showModel({{$count}})" src="https://dkmzc8tghb19s.cloudfront.net/fit-in/600x600/uploads/{{ $img->thumbnail}}" alt="Preview" style="width:100%;max-width:100px">
@endforeach
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>
=======
                <div class="col-md-2">
<ul class="gallery list-unstyled">  @foreach($images as $img)
<li style="float: left;padding-right: 5px; padding-top:5px;width: 90px;overflow: hidden;margin-right: 5px;" ><a href="#" rel="prettyPhoto[gallery2]" ><img src="https://dkmzc8tghb19s.cloudfront.net/fit-in/600x600/uploads/{{ $img->thumbnail}}" width="auto" height="140" alt="test" /></a></li>@endforeach </ul>


>>>>>>> 1b360367b41186be9c2cdd235eecc62e8003ad60

<div class="clearfix"></div>
<ul class='btn primary' style='font-size:13px;margin-top: 15px;padding-left: 12px;margin-left: 4px;display:none;'><a href='#'>View Album</a></ul>
<ul class='btn primary' style='font-size:13px;margin-top: 15px;padding-left: 12px;margin-left: 4px;display:none;'><a href='#'>Featured Article</a></ul>
<ul class='btn primary' style='font-size:13px;margin-top: 15px;padding-left: 12px;margin-left: 4px;'>
<<<<<<< HEAD
 <a href="/create-zip/{{$img->album_id}}">Downloads</a></ul>
</div>


                   
      <style>
      /* Style the Image Used to Trigger the Modal */
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal-content, #caption { 
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
      </style>                     
=======
 <a href='#'>D</a></ul>
</div>


                            
                           
                           
>>>>>>> 1b360367b41186be9c2cdd235eecc62e8003ad60

                      
@endsection