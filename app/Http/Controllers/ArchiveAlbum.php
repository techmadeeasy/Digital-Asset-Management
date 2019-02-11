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
       $editionlist = $editions->all();
       return view("editionview", compact("editionlist"));
      // return($editonlist);
    }
    public function articleview($id){
        $images = Image::where("album_id", $id)->get();
        $album_thumb = Form::where("id", $id)->get();
        return view("view-article", compact("images", "album_thumb"));

    }
}
