<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problems extends Model
{
    protected $fillable = [

        'name',
        'department',
        'dateofreport',
        'problemtype',
        'problemdescription',
        'statuses',

    ];
}
