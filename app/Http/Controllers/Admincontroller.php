<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Admincontroller extends  Controller
{
    public function sys_users()
    {

        $users = User::all();

        return view('admin.users',compact('users'));    

    }

    public function delete_users(Request $request, $id) 
     {
    
         $myusers = User::find($id);

         $myusers->delete();

         return redirect()->back();

    }
}
