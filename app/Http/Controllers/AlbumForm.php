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
        $listy = $year->get()->sortByDesc("name");
        return view('admin.edition', compact("listy"));
    }
    public function formview(Request $request){

       
        $list =[" ", "January", "February", "March", "April", 
        "May", "June", "July", "August", 
     "September", "October", "November", "December" ];
        $contributors = new Contributors;
        $listcon = $contributors->all();
        //get the year list 
        $years = Year::all()->sortByDesc("name");
        return view('admin.form', compact("list", "listcon", "years"));
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
                    //determine edition
                    $edition = Edition::where("year_id",  $request->get('years'))->where( "month",  $request->get('albumedition'))->get();
                    if($edition->count()<=0){
                        echo  "<script> alert('The edition you picked does not exist, create it first!')
                        window.location = '/create_edition';
                    </script>";
                    };
                    $albumtable->edition_id = $edition[0]->id;
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
                    
               //    return redirect("/upload_image");
           return   "<script> alert('Feature created successfully, proceed to upload images?')
                window.location = '/upload_image';
            </script>";
    }

}



   
