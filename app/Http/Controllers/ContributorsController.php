<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contributors;
use App\Form;
use App\Image;

class ContributorsController extends Controller
{
    public function index($id){
        $contrib = Contributors::find($id);
        $albums = new Form;
        $list =  $contrib->albums()->get();
        return view("admin.contrib-dashboard", compact("list","contrib"));
    }

    public function listAll(){
        $contributors = Contributors::paginate(1);
        $counter = 1;
        return view("admin.contrib-list", compact("contributors", "counter"));
    }

    public function uploadContract(Request $request){
        
    }
}
