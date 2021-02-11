<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function index()
   {
    
    return view('backend.index');
   }

   public function create()
    {
        return view('backend.create');
    }
    public function search()
    {
        return view('backend.search');
    }

    public function newCollege()
    {
        return view('backend.newCollege');
    }
}
