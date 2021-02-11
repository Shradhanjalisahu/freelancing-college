<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collegeprofile extends Model
{
    use HasFactory;
    protected $fillable = [
         'college_name', 'location'         
    ];
}
