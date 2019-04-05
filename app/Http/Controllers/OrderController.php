<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class OrderController extends Controller
{
    public function submitCsv(Request $request)
    {
//        $validate = $request->validate([
//            "salesreport" => "required|mimes:csv,txt, xlsx",
//        ]);
        $upload = $request->file("csvfile");
        $filePath = $upload->getrealpath();
        $file = fopen($upload, "r");
        $csvfile =fgetcsv($file);
        $colum_header = array_slice($csvfile, 1);
        //return $colum_header;
        $images = new Image;
        while ($column =$csvfile) {
            foreach ($column as $item => $value) {
                $rray[$item] = $value;
                print_r($value);
            }

        }
    }
}
