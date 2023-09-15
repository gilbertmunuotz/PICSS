<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    protected $fillabe = [

        'name',
        'department',
        'dateofrequests',
        'devicename',
        'devicedescription',
        'status',
        
    ];
}
