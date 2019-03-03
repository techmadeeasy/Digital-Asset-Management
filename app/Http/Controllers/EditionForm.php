<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\UploadedFile;
use App\Edition;
use App\Http\Controllers\DependencyUploadController;
use Storage;
class EditionForm extends Controller
{
    public function editionform(Request $request){
       
       
        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $disk = Storage::disk('s3');
            // It's better to use streaming Streaming (laravel 5.4+)
            $disk->putFileAs("uploads/" . date('Y-m-d'), $file, $fileName);
           
        }
        $filepath = date('Y-m-d') . "/" . $fileName;
        $editiontb = new Edition;
        $month = ["zero", "January", "February", "March", "April", 
        "May", "June", "July", "August", 
     "September", "October", "November", "December" ];
        $editiontb->issue = $request->get("issue");
        $editiontb->name = $month[$request->get("month")];
        $editiontb->magazine = $request->get("mag");
        $editiontb->month = $request->get("month");
        $editiontb->year_id = $request->get("year");
        $editiontb->terms= $request->get("terms");
        $editiontb->thumbnail = $filepath;
        $editiontb->save();
        //return redirect('/album');
        return "<script> if(confirm('Editions created successfully')){
            window.location = '/album'
        } else{
            window.location = '/archive';
        };
        </script>";
    }
}
