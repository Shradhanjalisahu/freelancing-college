<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollegeController extends Controller
{
    public function index(Request $request)
    {
        return view('user.index');
    }
}
