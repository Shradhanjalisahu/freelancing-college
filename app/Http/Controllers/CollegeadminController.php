<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use Illuminate\Support\Facades\DB;

use App\Models\Colleges;
use App\Models\State;
use App\Models\City;
use App\Models\Univercity;
use App\Models\Branch;

use DB;

class CollegeadminController extends Controller
{
   public function index(Request $request)
    {
        $states = State::orderBy('state_name')->get();
        $collegesList = Colleges::all();
        return view('colleges',compact('collegesList','states'))->with('i', (request()->input('page', 1) - 1) * 5);
    
    }


    public function newCollege(Request $request)
    {
        $branchList = Branch::orderBy('branch_name')->get();
        $states = State::orderBy('state_name')->get();
        return view('newCollege',compact('states','branchList'));
    }


     public function homePage(Request $request)
    {
        $branchList = Branch::all();
        //return $branchList;
       $branches = Branch::orderBy('branch_name')->get();
       return view('home',compact('branchList'));
    }



    public function view(Request $request){
        try{
            $url_params = $request->getRequestUri();
            $uri_segments = explode('/', $url_params);
            $states = State::orderBy('state_name')->get();
            $branch_name = "";
            if(count($uri_segments) > 2 && $uri_segments[2]){
                $branch_name = $uri_segments[2];
                $branch = Branch::where('branch_name', $uri_segments[2])
                    ->get(["branch_name","id"]);
                if(count($branch)){
                    $colleges = Colleges::where('branch_id', $branch[0]['id'])
                    ->get();
                } 
            }else{
                $colleges = Colleges::all();
            }
    
            $total = $colleges->count();
            return view('index',compact('states','colleges','total', 'branch_name'));
        }catch(Exception $e){
            print_r($e);
        }
    }



     public function getCity(Request $request)
    {
        $data['cities'] = City::where("state_id",$request->state_id)
                    ->get(["city_name","id"]);
        return response()->json($data);
    }


    public function getUnivercity(Request $request)
    {
        $data['univercities'] = Univercity::where("city_id",$request->city_id)
                    ->get(["univercity_name","id"]);
        return response()->json($data);
    }



    public function saveCollege(Request $request)
    {
        $this->validate($request,[
            'collegeName' => 'required|max:255',
            'location' => 'required|max:255',
            'contact' => 'required|digits_between:10,11',
            'name' => 'required|max:255',
            'state_id' => 'required|integer',
            'city_id' => 'required|integer',
            'branch_id' => 'required|integer',
            'course' => 'required|max:255',
            'email' => 'required|max:255',
            'address' => 'required|max:255',
            'facilites' => 'required|max:255',
            'history' => 'required',
            'mission' => 'required',
            'highlight' => 'required'

        ]);
        $stateData = explode('##', $request->state_id);
        $cityData = explode('##', $request->city_id);
        $college = new Colleges;
        $college->collegeName = $request->collegeName;
        $college->location = $request->location;
        //$college->aboutCollege = $request->about;
        $collegeUrl = $request->collegeName.' '.$stateData[1].' '.$cityData[1];
        $college->url = str_replace(" ","-",$collegeUrl);
        $college->contact = $request->contact;
        $college->email = $request->email;
        $college->address = $request->address;
        $college->facilites = $request->facilites;
        $college->course = $request->course;
        $college->mission = $request->mission;
        $college->highlight = $request->highlight;
        $college->history = $request->history;
        $college->name = $request->name;
        $college->state = $request->state;
        $college->state_id = $stateData[0];
        $college->city_id = $cityData[0];
        $college->branch_id = $request->branch_id;
        $college->mission = $request->mission;

        $college->save();
        return redirect('/')->with('success','College added successfully');
    }


    public function detail($collegeurl) {
       // $pattern = "/\s/";
        //$replacement = "-";
        $data = [];
       // $preg_replace = [];
        $college = Colleges::select('*')
                            ->where('url', '=', $collegeurl)
                            
                            ->first();

        $data['college'] = $college;
       // $preg_replace['college,pattern,replacement'] = $college;
        return view('collegedetail', $data);
    }




    public function getCities(Request $request)
    {
        $cities = City::whereIn('state_id',$request->state_id)->get();
        $hashed_type = $request->hashed_type;
        $multiple = $request->multiple;
        if(!isset($hashed_type)){
            $html = view('ajax.city_ajax',compact('cities','multiple'))->render();
        }else{
            $html = view('ajax.hashed_city_ajax',compact('cities','multiple'))->render();
        }
        
        return response()->json([
            'success' => $html,
        ]);
    }



    public function getColleges(Request $request)
    {
       try {
            $colleges = new Colleges();
            $branch = [];
            if(isset($request->branch_name) && $request->branch_name != null){
                $branch = Branch::where('branch_name', $request->branch_name)
                            ->get(["branch_name","id"]);
            }
            if(count($branch)){
                $colleges = $colleges->where('branch_id', $branch[0]['id']);
            }
            if(isset($request->state_id) && $request->state_id != null){
                $colleges = $colleges->whereIn('state_id',$request->state_id);
            }
            if(isset($request->city_id) && $request->city_id != null){
                $colleges = $colleges->whereIn('city_id',$request->city_id);
            }
            // $sql = $colleges->toSql();
            $colleges = $colleges->get();
            $total = $colleges->count();

            $html = view('ajax.get_colleges',compact('colleges','total'))->render();

            return response()->json([
                'success' => $html,
            ]);

       } catch (Exception $th) {
           return response()->json([
               'success' => $th,
           ]);
       }

    }

}
