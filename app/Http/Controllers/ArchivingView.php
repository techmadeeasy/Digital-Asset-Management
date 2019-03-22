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
use App\Contributors;
use Illuminate\Support\Facades\Auth;
use Bugsnag\BugsnagLaravel\Facades\Bugsnag;
use RuntimeException;



class ArchivingView extends Controller
{
    
    public function editonlist($id){
        $editions = new Edition;
        $list = $editions->whereYearId($id)->get();
        $num = 1;
        return view("admin.archive", compact("list", "num"));
    }

    public function featurelist($id){
        $album = new Form;
        $get_album = $album->where('edition_id', $id)->get();
        //find contributors
        foreach ($get_album as $albums){
            $con = $album->find($albums->id)->contributors()->get();
            if(count($con)!=0){
               $arrays[$con[0]->id] = $con[0]->name;
            //    dd($con[0]->name);
            }
            else{
                 $arrays[0] = "Unkown Photographer";
            }

        }
        $editions = new Edition;
         $num = 1;
        $edition = $editions->whereId($id)->get();
     // return view("admin.archive-album", compact("get_album", "edition", "num", "arrays"));
  return $edition;
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
    public function editalbum($id){

        $album = Form::whereId($id)->get();
        $this_contri = Form::find($id)->contributors()->get();
        $contributors = Contributors::all();
      return view("admin.edit-album", compact("album", "contributors", "this_contri"));
     // return $this_contri;
    }

    public function updateAlbum(Request $request){
        $title = $request->get('name');
        $desc = $request->get("desc");
        $contr = $request->get('contrib');
        $id = $request->get('id');
        $album = Form::whereId($id);
        $upd = $album->update(["names"=>$title, "description"=>$desc, "photographer_id"=>$contr]);
        $message = "Album updated successfully";
        return redirect("/edit/$id/album")->with(["message"=>$message]);

    }
    public function edit($id){
        $category = Category::all();
        $tag_img = Tag_image::whereImageId($id)->get();
            if(count($tag_img)>=1){
                foreach($tag_img as $ts){
                    $tname = Tag::whereId($ts->tag_id);
                    $list[] = $tname->id;
                }
            }
            else{
                //random list data so that we do not send an empty $list array
                $list = [0.2, 0.4];
            }
        $tags = Tag::all();
        $thumbnail = new Image;
        $get_thumb = $thumbnail->where("id", $id)->get();
    return view("admin.edit-thumbnail", compact("get_thumb", "category", "tags", "list"));
      
    }
    
    public function update_thumbnail(Request $request ){
            $cat = $request->get("cat");
            $image = new Tag_image ;
            $imgid =$request->get("id");
            $checkifimage = $image->where("image_id",  $imgid)->delete();

            //check if new tag is set

            if(!empty($request->get("hellow"))){
                $taglist = $request->get("hellow");
                    foreach($taglist as $tag){
                        if($request->get("id")){
                            $image->image_id = $imgid;
                            $fills = $image->create(['tag_id'=>$tag, 'image_id'=>$imgid]);
                        // $image->save();
                            }
                    }
            }
                //add new tag

            if (!empty($request->get("new-tag"))){
                $new = Tag::create(["name"=>$request->get("new-tag"), "cat_id"=>$cat]);
               
                //find the id of the added tags 
              
                $newt = Tag::where("name", $request->get("new-tag"))->get();
                $fills = $image->create(['tag_id'=>$newt[0]->id, 'image_id'=>$imgid]);
            }
          return redirect("/edit/$imgid");
    
            
                }
                
            }
