<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Edition;
use App\Form;
use App\Image;

class ArchivingView extends Controller
{
    public function editonlist(){
        $editions = new Edition;
        $list = $editions->all();
        return view("admin.archive", compact("list"));
    }

    public function featurelist($id){
        $album = new Form;
        $get_album = $album->where('edition_id', $id)->get();
        $editions = new Edition;
        $edition = $editions->where('id', $id)->get();
        return view("admin.archive-album", compact("get_album", "edition"));
    }
    public function thumbnailview($id){
        $thumbnail = new Image;
        $get_thumb = $thumbnail->where("album_id", $id)->get();

        $album_name = Form::where("id", $id)->get();
        return view("admin.thumbnail", compact("get_thumb", "album_name"));
    }
    public function thumbnaildelete($id){
        $thumbnail = new Image;
        $delete = $thumbnail->find($id)->delete();
        return back();
    }
    public function albumdelete($id){
        $albs = new Form;
        $delete = $albs ->find($id)->images()->delete();
        $albs->find($id)->delete();
        return back();
    }
    
}
