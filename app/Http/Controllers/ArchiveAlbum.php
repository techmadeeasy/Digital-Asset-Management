<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Form;
use App\Edition;

class ArchiveAlbum extends Controller
{
    public function archiveview($id){
        $albums = new Form;
        $albumnames = $albums->where("edition_id", $id)->get();
        return view("catalogue", compact("albumnames"));
    }
    public function edition(){
        $editions = new Edition;
<<<<<<< HEAD
       $editionlist = $editions->where("year", 2018)->orderBy("month")->get();
       return view("editionview", compact("editionlist", "value"));
      // return($editonlist);
    }
    public function articleview($id){
        $count = 0;
        $pick_bread = 'App\Edition';
       // $album_name = Form::where("id", )
        $images = Image::where("album_id", $id)->get();
        $album_thumb = Form::where("id", $id)->get();
        $albm = Edition::find($album_thumb[0]->edition_id);
       return view("view-article", compact("images", "album_thumb","count", "albm"));
       
=======
       $editionlist = $editions->all();
       return view("editionview", compact("editionlist"));
      // return($editonlist);
    }
    public function articleview($id){
        $images = Image::where("album_id", $id)->get();
        $album_thumb = Form::where("id", $id)->get();
        return view("view-article", compact("images", "album_thumb"));

>>>>>>> 1b360367b41186be9c2cdd235eecc62e8003ad60
    }
}
