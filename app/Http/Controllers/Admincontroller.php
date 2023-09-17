<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends  Controller
{
    public function sys_users()
    {
    
        return view('admin.users');

    }
}
