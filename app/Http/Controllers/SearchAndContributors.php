<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Form;
use App\Edition;
use App\Contributors;

class SearchAndContributors extends Controller
{
    public function search(){
        return view("admin.search");
    }


    public function search_submit(Request $request){
     $word = $request->get('seach');
     $images = new Image;
       $search = $images->where('filename','LIKE', "%". $word ."%")->get();
      
                if(count($search)>=1){
                      $features = Form::all();
        $editions = Edition::all();
        //return $features;
        foreach ($search as $single){
            $id = $single->id;
            $thumbnail = $single->thumbnail;
            $aln = $search->find($id)->albums()->get()->first();
           
                        //if no feature found
                        if(count($aln)==0){
                            $alb_name = " Unkown Feature";
                            $photograph_name = "Unkown Photographer";
                                $photograph_id = "#";
                             $edit_name = "Unkown Edition";
                        }
                        else{
                            
                               $alb_name  = $aln->names;
                               
                                $alb_id = $aln->id;
                              $edition = $features->find($alb_id)->editions()->get()->first();
                              $edit_name = $edition->name;
                               $aln = $features->find($alb_id)->contributors()->get()->first();
                                if(!$aln){
                                $photograph_name = "Unkown Photographer";
                                $photograph_id = "#";
                        }

                                else{
                                    $photograph_name = $aln->name;
                                     $photograph_id = $aln->id;
                                }
                                  
                        }
                         $albums[$id]= $thumbnail . "," .  $single->filename . "," . $alb_name . ",". $edit_name . "," . $photograph_name . "," . $photograph_id;
        }
                return  view("admin.search", compact("word" , "albums"));
             
                }
                else{
                    return "nothing found";
                }

    }
}
