<?php

namespace App\Http\Controllers;

use App\Models\College;

use Illuminate\Http\Request;

class CollegeurlController extends Controller
{
  public function index()
    {
        $collegeurl = College::latest()->paginate(5);
        return view('collegeurl.index',compact('collegeurl'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
     public function create()
    {
        return view('collegeurl.create');
    }
     public function store(Request $request)
    {
       $request->validate([
            'college_name' => 'required',
            
            'state' => 'required',
        ]);
  
        College::create($request->all());
   
        return redirect()->route('collegeurl.index')->with('success',' created successfully.');
    }
    
   
}
