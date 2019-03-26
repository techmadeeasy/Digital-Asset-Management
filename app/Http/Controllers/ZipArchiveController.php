<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ZipArchive;
use App\Image;
use Illuminate\Support\Facades\Auth;
use File;


ini_set('max_execution_time', 600);
ini_set('memory_limit', '2000M');
class ZipArchiveController extends Controller
{
    public function index($id)
    {
            // Define Dir Folder
            File::delete(public_path(), 'Album.zip');
        	$public_dir=public_path();
        	// Zip File Name
            $zipFileName = 'Album.zip';
            // Create ZipArchive Obj
            $zip = new ZipArchive;
          //  $zip->addFromString($filename, file_get_contents("https://dkmzc8tghb19s.cloudfront.net/fit-in/5000x600/uploads/" . $file->thumbnail));
            if ($zip->open($public_dir . '/' . $zipFileName, ZipArchive::CREATE) === TRUE) {
$image = new Image;
$albumss = $image->get()->where("album_id", $id);

function url_get_contents ($Url) {
    if (!function_exists('curl_init')){ 
        die('CURL is not installed!');
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

foreach($albumss as $file) {

 if ( preg_match('/\s/',$file->thumbnail) ) {
    $fileN = str_replace(" ", "+", $file->thumbnail);
 }
 else{
    $fileN = $file->thumbnail;
 }
    $zip->addFromString($file->thumbnail, url_get_contents("https://s3.us-east-2.amazonaws.com/dynamic-image-storage/uploads/" . $fileN));
}      
                $zip->close();
            }
            // Set Header
            $headers = array(
                'Content-Type' => 'application/octet-stream',
            );
            $filetopath=$public_dir.'/'.$zipFileName;
           
            // Create Download Response
            if(file_exists($filetopath)){
               return response()->download($filetopath,$zipFileName,$headers);
               
            }
      // }
    
       // return back('createZip')
    
}
}
