<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Form;
use App\Edition;
use App\Contributors;
use App\Image;
use App\Year;
use Storage;

class AlbumForm extends Controller
{
    //
    public function yearlist(){
        $year = new Year;
        $listy = $year->all();
        return view('admin.edition', compact("listy"));
    }
    public function formview(Request $request){

        $editiontb = new Edition;
        $list = $editiontb->all();
        $contributors = new Contributors;
        $listcon = $contributors->all();
        return view('admin.form', compact("list", "listcon"));
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
            $unique_name = $request->get('albumname') . "_" . md5(time());

                $filepath = date('Y-m-d') . "/" . $fileName;
                    $albumtable = new Form;
                    $albumtable->names = $request->get('albumname');
                    $albumtable->unique_name = $unique_name;
                    $albumtable->category = $request->get('cat');
                    $albumtable->edition_id = $request->get('albumedition');
                    $albumtable->photographer = $request->get('albumphoto');
                        $albumtable->description = $request->get('overview');
                        //$albumtable->writer = "thewroro";
                        $albumtable->thumbnail = $filepath;
                        $albumtable->save();
                        //pulling the album id for the image table
                $ids = $albumtable->latest()->first();

                        //load data in session variable to send to the image uploader which will use it to complete the database fields for that album
                    Session::put("album", $request->get('albumname'));
                    Session::put("cat", $request->get('cat'));
                    Session::put("edition", $request->get('albumedition'));
                    Session::put("album_id", $ids->id);
                    
                    return redirect("/upload_image");
                    // return ( )  ;                  
    }

 
}



   
