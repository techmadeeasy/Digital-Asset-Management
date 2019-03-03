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
        $album_thumb = Form::where("id", $id)->get();
        $albm = Edition::find($album_thumb[0]->edition_id);
        $years = Year::find($albm->id);
      return view("view-article", compact("images", "album_thumb","count", "albm"));
       //return $years;
    }
}
