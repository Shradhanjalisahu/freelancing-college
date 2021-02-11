<?php

namespace App\Http\Controllers;

use App\Models\Collegeprofile;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
       //$profile = Collegeprofile::latest()->paginate(5);
        //return view('profile.index',compact('profile'))->with('i', (request()->input('page', 1) - 1) * 5);

        // get the posts from the database by asking the Active Record for "all"
        $profile = Collegeprofile::all();

        // and create a view which we return - note dot syntax to go into folder
        return view('profile.index', array('profile' => $profile));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
            'college_name' => 'required',
            'location' => 'required',
            
        ]);
  
        Collegeprofile::create($request->all());
   
        return redirect()->route('profile.index')->with('success','Collegeprofile created successfully.');
    }
    
}
