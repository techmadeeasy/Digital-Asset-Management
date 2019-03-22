<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Form;
use App\Edition;
use App\Year;

class ArchiveAlbum extends Controller
{

 
    public function archiveview($id){
        $albums = new Form;
        $albumnames = $albums->where("edition_id", $id)->get();
        $edition = Edition::find($id);
        $years = Year::find($edition->year_id);

       return view("catalogue", compact("albumnames", "years", "edition"));
    // return $years->name;
    }
    public function edition($id){
        $editions = new Edition;
       $editionlist = $editions->where("year_id", $id)->orderBy("month")->get();
       $years = Year::find($id);
      return view("editionview", compact("editionlist", "years"));
      //return $years;
    }
    public function articleview($id){
        $count = 0;
        $pick_bread = 'App\Edition';
       // $album_name = Form::where("id", )
        $images = Image::where("album_id", $id)->get();
        $album_thumb = Form::whereId($id)->get();
        $albm = Edition::whereId($album_thumb[0]->edition_id)->get()->first();
       $years = Year::whereId($albm->year_id)->get()->first();;
    return view("view-article", compact("images", "album_thumb","count", "albm", "years"));
   // return  $album_thumb;
    }
}
