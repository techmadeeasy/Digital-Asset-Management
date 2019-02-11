@extends('layouts.frontend')

@section('content')
                <div class="col-md-2">
                        <h2 style="font-family: 'Open Sans', sans-serif; font-weight: 100;"></h2>
                        <h5>Content</h5>
                        <p style="margin:none;"> Number of images: {{ count($images)}}</p>
                        @foreach($album_thumb as $imf)
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
                <div class="col-md-2">
<ul class="gallery list-unstyled">  @foreach($images as $img)
<li style="float: left;padding-right: 5px; padding-top:5px;width: 90px;overflow: hidden;margin-right: 5px;" ><a href="#" rel="prettyPhoto[gallery2]" ><img src="https://dkmzc8tghb19s.cloudfront.net/fit-in/600x600/uploads/{{ $img->thumbnail}}" width="auto" height="140" alt="test" /></a></li>@endforeach </ul>



<div class="clearfix"></div>
<ul class='btn primary' style='font-size:13px;margin-top: 15px;padding-left: 12px;margin-left: 4px;display:none;'><a href='#'>View Album</a></ul>
<ul class='btn primary' style='font-size:13px;margin-top: 15px;padding-left: 12px;margin-left: 4px;display:none;'><a href='#'>Featured Article</a></ul>
<ul class='btn primary' style='font-size:13px;margin-top: 15px;padding-left: 12px;margin-left: 4px;'>
 <a href='#'>D</a></ul>
</div>


                            
                           
                           

                      
@endsection