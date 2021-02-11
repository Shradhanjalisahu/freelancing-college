<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colleges extends Model
{
    use HasFactory;
    protected $table = "colleges";
    protected $guarded = [];

    public function branch()
    {
        return $this->belongsTo('App\Models\Branch');
    }
}
