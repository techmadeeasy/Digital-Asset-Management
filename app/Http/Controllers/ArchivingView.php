<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Edition;
use App\Form;
use App\Image;
use App\Category;
use App\Tag;
use App\Tag_image;
use App\Year;
use Illuminate\Support\Facades\Auth;


class ArchivingView extends Controller
{
    public function editonlist($id){
        $editions = new Edition;
        $list = $editions->whereYearId($id)->get();
        //return $list;
        return view("admin.archive", compact("list"));
    }

    public function featurelist($id){
        $album = new Form;
        $get_album = $album->where('edition_id', $id)->get();
        $editions = new Edition;
        $edition = $editions->whereId($id)->get();
       return view("admin.archive-album", compact("get_album", "edition"));
    }
    public function thumbnailview($id){
        $thumbnail = new Image;
        $get_thumb = $thumbnail->whereAlbumId($id)->get();
        foreach($get_thumb as $img_id){
            $a=Image::find($img_id->id);
           foreach($a->tags as $tname){
               $tag_name[$tname->name] =  $img_id->id;
           }
        }
        //send a random dummy value if not tag has been set for a image

        if(!isset($tag_name)){
            $tag_name = [0.1,0.7];
        }
        $album_name = Form::whereId($id)->get();
        return view("admin.thumbnail", compact("get_thumb", "album_name", "tag_name"));
        //return $tag_name;
      
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
    public function edit($id){
        $category = Category::all();
        $tag_img = Tag_image::whereImageId($id)->get();
            if(count($tag_img)>=1){
                foreach($tag_img as $ts){
                    $tname = Tag::find($ts->tag_id);
                    $list[] = $tname->id;
                }
            }
            else{
                //random list data so that we do not send an empty $list array
                $list = [0.2, 0.4];
            }
        $tags = Tag::all();
        $thumbnail = new Image;
      //  $ts =$thumbnail->find($id)->image();
        $get_thumb = $thumbnail->where("id", $id)->get();
       return view("admin.edit-thumbnail", compact("get_thumb", "category", "tags", "list"));

    }
    
    public function update_thumbnail(Request $request ){
    $cat = $request->get("cat");
    $image = new Tag_image ;
    $taglist = $request->get("hellow");
//   if(count($request->get("hellow")>1)){}
    $imgid =$request->get("id");
   // $img = $image->image_id = implode(",", $request->get("hellow"));
   $checkifimage = $image->where("image_id",  $imgid)->delete();
   foreach($taglist as $tag){
   // $image->tag_id = $tag;
    $image->image_id = $imgid;
    $fills = $image->create(['tag_id'=>$tag, 'image_id'=>$imgid]);
   // $image->save();
   }

   //add new tag

   if (count($request->get("new-tag")>=1)){
       $new = Tag::create(["name"=>$request->get("new-tag"), "cat_id"=>$cat]);
       //find the id of the added tags 
       $newt = Tag::where("name", $request->get("new-tag"))->get();
       $fills = $image->create(['tag_id'=>$newt[0]->id, 'image_id'=>$imgid]);
   }
    return redirect("/edit/$imgid");
    }
    
}
