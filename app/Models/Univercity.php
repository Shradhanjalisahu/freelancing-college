<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Univercity extends Model
{
    use HasFactory;
    protected $fillable = [
         'univercity_name' ,'city_id'        
    ];
}
