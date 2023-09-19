<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Polyfill\Intl\Idn\Idn;

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

    public function edit_users(Request $request, $id)
     {
        $users  = User::find($id);
    
        return view('admin.sysus', compact('users'));

    }

    public function update_myusers(Request $request, $id)
     {
    
        $upusers = User::find($id);

        $upusers->id = $request->id;

        $upusers->name = $request->name;

        $upusers->usertype = $request->usertype;

        $upusers->save();

        return redirect()->back()->with('message','Updated Succesfully');

    }
}
