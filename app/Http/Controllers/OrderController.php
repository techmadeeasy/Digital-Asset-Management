<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class OrderController extends Controller
{
    public function index(){
        return view("admin.upload-csv");
    }
    public function submitCsv(Request $request)
    {
        $validate = $request->validate([
            "csv-file" => "required|mimes:csv,txt, xlsx",
        ]);

        $upload = $request->file('csv-file');
        $filePath = $upload->getrealpath();
        $file = fopen("$upload", "r");
        $images = new Image;
        while ($column = $filecontent = fgetcsv($file)) {

            foreach ($column as $item => $value) {
                $rray[$item] = $value;
            }
        }
    }
}
