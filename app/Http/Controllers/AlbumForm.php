<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Form;
use Storage;

class AlbumForm extends Controller
{
    //
    public function formview(Request $request){

        return view('admin.form');
    }
    public function submitform(Request $request){
//save image into s3 buckets

if($request->hasFile('image')){
    $file = $request->file('image');
    $fileName = $file->getClientOriginalName();
    $disk = Storage::disk('s3');
    // It's better to use streaming Streaming (laravel 5.4+)
    $disk->putFileAs("uploads/" . date('Y-m-d'), $file, $fileName);
   
}
//save values in database 
$filepath = date('Y-m-d') . "/" . $fileName;
      $albumtable = new Form;
      $albumtable->name = $request->get('albumname');
    // $albumtable->category = "nothin";
      $albumtable->edition = $request->get('albumedition');
      $albumtable->photographer = $request->get('albumphoto');
        $albumtable->description = "nothihn";
        $albumtable->writer = "thewroro";
        $albumtable->thumbnail = $filepath;
        $albumtable->save();
       
        //load data in session variable to send to the image uploader which will use it to complete the database fields for that album
    Session::put("album", $request->get('albumname'));
  // Session::put("cat", $request->get('cat'));
    Session::put("edition", $request->get('albumedition'));

        return redirect("/upload_image");
    }

 
}



   
