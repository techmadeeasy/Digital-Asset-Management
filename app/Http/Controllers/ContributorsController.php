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
        $orders = $contrib->orders()->get();
        $albums =Form::all();
        $list =  $contrib->orders()->distinct()->count();
        $total_amount=0;
        $total_comm = 0;
        //summing the value from the order table
        if(count($orders)!=0){
            foreach ($orders as $order){
                $album_id[$order->image_id] = $order->album_id;
                $total_amount+= $order->amount;
                $total_comm+= $order->payout;
            }
        }
        else{
            $album_id= array();
            $total_amount = 0;
            $total_comm= 0;
        }
        $image_sold = count($orders);
        $order_info = $total_amount . "," . $total_comm . "," . $image_sold;
        return view("admin.contrib-dashboard", compact("order_info","contrib", "list", "orders", "album_id", "albums"));

    }

    public function listAll(){
        $contributors = Contributors::paginate(15);
        $counter = 1;
        return view("admin.contrib-list", compact("contributors", "counter"));
    }

}
