<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
use App\Role_User;
use softdelete;

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
    public function adduser(){
        return view("admin.add-new-user");
    }


    public function submituser(Request $request){
        $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'password2' => 'required',
      //   'password' => Hash::make($request->newPassword)
    ]);
    
    if($request->get("password")==$request->get('password2')){
        $password = Hash::make($request->get('password2'));
        $role = $request->get("role");
        $userTable = new User;
        $newuser =  $userTable->create(["name"=>$request->get('name'), "email"=>$request->get('email'), "password"=>$password, "role_id"=>$role]);
     
        // $pivotTable = new Role_User;
        // $createduser = $userTable->whereEmail($request->get('email'))->get();
        // $newuseid = $createduser[0]->id;
        // $newuserrole = $pivotTable->create(["user_id"=>$newuseid, "role_id"=>$request->get('role')]);
        $message = "New user added successfully!";
    //  return view("admin.add-new-user", compact("message"));
      return redirect('/add-new-user')->with(["message"=>$message]);
    }
   
}

            public function deleteuser($id){
              $delete = User::whereId($id)->delete();
                $message = "User deleted successfully!";
     // return view("admin.user-list", compact("message"));   
     return redirect("/user-list")->with(["message"=>$message]);
            }
            public function edituser($id){
                $edit = User::whereId($id)->get();
                $role = ["2"=>"staff", "3"=>"partner", "4"=>"client"];
                return view("admin.edit-user", compact("edit", "role"));
            }

                public function updateuser(Request $request){
        $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required',
      //   'password' => Hash::make($request->newPassword)
    ]);
    
        $password = Hash::make($request->get('password2'));
        $role = $request->get("role");
        $id = $request->get('id');
        $userTable = User::whereId($id);
        $newuser =  $userTable->update(["name"=>$request->get('name'), "email"=>$request->get('email'), "role_id"=>$role]);
     
        // $pivotTable = new Role_User;
        // $createduser = $userTable->whereEmail($request->get('email'))->get();
        // $newuseid = $createduser[0]->id;
        // $newuserrole = $pivotTable->create(["user_id"=>$newuseid, "role_id"=>$request->get('role')]);
        $message = "User info updated successfully!";
      return redirect("edit/$id/user")->with(["message"=>$message]);
    // return view("admin.edit-user", compact("message"));

}
}
