<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collegesform extends Model
{
    use HasFactory;
    protected $fillable = [
         'collegeName', 
         'location',
         'contact',
         'url',
         'image',
         'location',
         'course',
         'email',
         'address',
         'facilites',
         'history',
         'mission',
         'highlight'         
    ];
}
