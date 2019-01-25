<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class AlbumForm extends Controller
{
    //
    public function formview(Request $request){

        return view('form');
    }
    public function submitform(Request $request){

       $albumname = [];
      $albumname['name'] =  $request->get('albumname');
      $albumname['edition']= $request->get('albumedition');

      $albumtable = new Form;
      $albumtable->name = $albumname['name'];
      $albumtable->edition = $albumname["edition"];
      $albumtable->photographer = $request->get('albumphoto');
        $albumtable->description = "nothihn";
        $albumtable->writer = "thewroro";

        $albumtable->save();

        return "done";


    }
}



   