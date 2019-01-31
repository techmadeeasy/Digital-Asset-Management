
@extends('layouts/upload')
@section('page-title', 'Upload')


@section('body-end')
    <script src="{{ asset('vendor/blueimp-file-upload/js/vendor/jquery.ui.widget.js') }}"></script>
    <script src="{{ asset('vendor/blueimp-file-upload/js/jquery.iframe-transport.js') }}"></script>
    <script src="{{ asset('vendor/blueimp-file-upload/js/jquery.fileupload.js') }}"></script>
@endsection

@section('content')
  
    <div class="text-center">
    <div class="image">
        <img src="{{ asset('assets/images/profile-logo.svg')}}" width=200 alt="">
    </div>
    <h4>Upload Your High Resolution Images For the {{Session::get('album')}} album</h4>
    <div  class="form-group row">    
                  <div class="col-12">
          <label for="file">Select files</label> <input id="fileupload" type="file" class="" name="file" data-url="{{ url('upload') }}" style="display: inline;" multiple>
      <div class="row">
         <div class="col-md-3"></div>
         <div class="col-md-6">
                        <div id="myProgress">
                                    <div id="myBar"></div>
                                    </div>
                                </div>
         <div class="col-md-3"></div>
         </div>
        <ul id="file-upload-list" class="list-unstyled">

        </ul>
        </div>
        </div>
       
    </div>

@endsection

@section('script')
<style>
#myProgress {
  width: 100%;
  background-color: grey;
  margin-top: 22px;
  display:none;
}

#myBar {
  width: 0%;
  height: 30px;
  background-color: #01b2af;
}
</style>

<link rel="stylesheet"
          href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    @yield('body-end')
    <script src="{{ asset('js/app.js') }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script>
    function hide(){
        document.getElementById("myProgress").style.display="none";
    }
        var $ = window.$; // use the global jQuery instance
var $uploadList = $("#file-upload-list");
var $fileUpload = $('#fileupload');
if ($uploadList.length > 0 && $fileUpload.length > 0) {
    var idSequence = 0;
    // A quick way setup - url is taken from the html tag
    $fileUpload.fileupload({
        maxChunkSize: 100000,
        method: "POST",
        // Not supported
        sequentialUploads: false,
        formData: function (form) {
            // Append token to the request - required for web routes
            return [{name: '_token', value: $('input[name=_token]').val()}];
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $("#" + data.theId).text('Uploading ' + progress + '%');
            move(progress)
        },
        add: function (e, data) {
            data._progress.theId = 'id_' + idSequence;
            idSequence++;
            $uploadList.append($('<li id="' + data.theId + '"></li>').text('Uploading'));
            data.submit();
        },
        done: function (e, data) {
            console.log(data, e);
            $uploadList.append($('<li></li>').text('Uploaded: ' + data.result.name));
        }
    });

function move(progress) {
    document.getElementById("myProgress").style.display="block";
  var elem = document.getElementById("myBar"); 
  var width = progress;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
    }
  }
}
}
    </script>

@endsection