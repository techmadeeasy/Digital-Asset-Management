<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page-title', 'Laravel chunked upload')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="css/app.css"/>
    @yield('head')
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            @yield('page-title', 'Laravel chunked upload')
        </div>
        {{ csrf_field() }}
        <div class="links">
            <a href="https://github.com/pionl/laravel-chunk-upload">Github docs</a>
            <a href="{{ url('jquery-file-upload') }}">jQuery-File-Upload example</a>
            <a href="{{ url('dropzone') }}">DropZone</a>
            <a href="{{ url('resumable') }}">Resumable</a>
            <a href="https://github.com/laravel/laravel">Laravel framework</a>
        </div>
        @yield('content')
     
    </div>
    <link rel="stylesheet"
          href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    @yield('body-end')
    <script src="{{ asset('js/app.js') }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script>
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
        },
        add: function (e, data) {
            data._progress.theId = 'id_' + idSequence;
            idSequence++;
            $uploadList.append($('<li id="' + data.theId + '"></li>').text('Uploading'));
            data.submit();
        },
        done: function (e, data) {
            console.log(data, e);
            $uploadList.append($('<li></li>').text('Uploaded: ' + data.result.path + ' ' + data.result.name));
        }
    });
}
    </script>
</body>
</html>
