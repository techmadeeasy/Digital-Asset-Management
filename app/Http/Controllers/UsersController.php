<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class UsersController extends Controller
{
    public function listuser(){
        $list = User::all();
        $role = Role::all();
        foreach($role as $r){
        $rs[$r->id] = $r->name;
        }
       return view("admin.user-list", compact("list", "rs"));
    
    }
}
