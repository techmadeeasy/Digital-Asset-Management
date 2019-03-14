<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Form;
use App\Edition;

class SearchAndContributors extends Controller
{
    public function search(){
        return view("admin.search");
    }


    public function search_submit(Request $request){
     $word = $request->get('seach');
     //$name = "finals";
       $search = Image::where('filename','LIKE', "%". $word ."%")->get();
      
                if(count($search)>=1){
                      $features = Form::all();
        $editions = Edition::all();
        //return $features;
        foreach ($features as $single){
            $id = $single->id;
            $aln = $features->find($id)->editions()->get()->first();
            
          if(count($aln)==0){
            $edit_name = " No edition";
          }
          else{
                $edit_name = $aln->name;
          }
         $albums[$id]= $single->names . "," . $edit_name . "," . $single->photographer;
        }
                    return  view("admin.search", compact("search", "word" , "albums"));
                }
                else{
                    return "nothing found";
                }

    }
}
