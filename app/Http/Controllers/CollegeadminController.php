<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use Illuminate\Support\Facades\DB;

use App\Models\Colleges;
use App\Models\State;
use App\Models\City;
use App\Models\Univercity;
use App\Models\Branch;
use App\Models\Course;
use App\Imports\ImportCollege;
use App\Exports\ExportCollege;
use Excel;
use DB;
use Session;


class CollegeadminController extends Controller
{
   public function index(Request $request)
    {
        $states = State::orderBy('state_name')->get();
        $collegesList = Colleges::all();
        return view('colleges',compact('collegesList','states'))->with('i', (request()->input('page', 1) - 1) * 5);
    
    }


    public function addBranch(Request $request)
    {
        $branchList = Branch::orderBy('branch_name')->get();
        
        return view('addBranch',compact('branchList'));
    }

    public function addState(Request $request)
    {
       
        $states = State::orderBy('state_name')->get();
        return view('addState',compact('states'));
    }

    public function newCollege(Request $request)
    {
        $branchList = Branch::orderBy('branch_name')->get();
        $states = State::orderBy('state_name')->get();
        return view('newCollege',compact('states','branchList'));
    }


    public function importCSVfile(Request $request)
    {
        $branchList = Branch::orderBy('branch_name')->get();
        $states = State::orderBy('state_name')->get();
        return view('importCSVfile',compact('states','branchList'));
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
            $query = [];
            $colleges = [];
            $state_id = '';
            $city_id = '';
            $state_name = "";
            $city_name = "";
            if(count($uri_segments) > 2 && $uri_segments[2]){
                if($uri_segments[2]=='list'){
                    // if state is present
                    if(count($uri_segments) > 3 && $uri_segments[3]){
                        $state_name = $uri_segments[3];
                        $state = State::where('state_name', $uri_segments[3])
                            ->get(["state_name","id"]);
                        if(count($state)){
                            $query['state_id'] = $state[0]['id'];
                            $state_id = $state[0]['id'];
                        }
                    }

                    // if state and city present
                    if(count($uri_segments) > 4 && $uri_segments[4]){
                        $city_name = $uri_segments[4];
                        $city = City::where('city_name', $uri_segments[4])
                            ->get(["city_name","id"]);
                        if(count($city)){
                            $query['city_id'] = $city[0]['id'];
                            $city_id = $city[0]['id'];
                        }
                    }

                    // if there is any condition then just fetch the query
                    if(count($query)){
                        $colleges = Colleges::where($query)
                            ->get();
                    }
                    
                    
                }else{
                    // if the enpoint not containes list keyword in url then that means the query is for branch
                    $branch_name = $uri_segments[2];
                    $branch = Branch::where('branch_name', $uri_segments[2])
                        ->get(["branch_name","id"]);
                    if(count($branch)){
                        $colleges = Colleges::where('branch_id', $branch[0]['id'])
                        ->get();
                    } 
                }
            }else{
                $colleges = Colleges::all();
            }
    
            $total = count($colleges);
            return view('index',compact('states','colleges','total', 'branch_name', 'state_id', 'city_id', 'city_name', 'state_name'));
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
            'collegeName' => 'required|unique:colleges||max:255',
            'location' => 'required|max:255',
            'contact' => 'required|digits_between:10,11',
            'name' => 'required|max:255',
            'state_id' => 'required',
            'city_id' => 'required',
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
        $collegeUrl = strtolower($request->collegeName.' '.$stateData[1].' '.$cityData[1]);
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
       // $college->state = $request->state;
        $college->state_id = $stateData[0];
        $college->city_id = $cityData[0];
        $college->branch_id = $request->branch_id;
        $college->mission = $request->mission;

        $college->save();
        return redirect('/')->with('success','College added successfully');
        

    }


     public function saveBranch(Request $request)
       {

        $branch = new Branch;
        $branch->branch_name = $request->branch_name;

        $branch->save();
        return redirect('home')->with('success','Branch added successfully');
        
      }




    public function saveState(Request $request)
    {

        $college = new Branch;
        $branch->state_name = $request->state_name;

        $branch->save();
        return redirect('/')->with('success','State added successfully');
        

    }



    public function detail($collegeurl) {
        $data = [];
        $college = Colleges::select('*')
                    ->where('url', '=', $collegeurl)
                    ->first();
                  
        $state = State::select('*')
                ->where('id', $college['state_id'])
                ->first();
        
        
        $city = City::select('*')
                ->where('id', $college['city_id'])
                ->first();

        $data['college'] = $college;
        $data['college']['state_name'] = $state['state_name'];
        $data['college']['city_name'] = $city['city_name'];
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



    function import(Request $request)
    {
        try{
            $isValid = $this->validate($request, [
                'select_file'  => 'required|mimes:xls,xlsx'
            ]);

            # Total number of rows in the sheet to session
            Session::put('importResult');

            Excel::import(new ImportCollege(), request()->file('select_file'));

            $value = Session::get('importResult');

            return $value;

        }catch(Exception $e){
            return $e;
        }
    }

    function exportCollege(Request $request){
        try {
            //code...
            $fileName = 'COLLEGE_'.date("hisa");
            return Excel::download(new ExportCollege, $fileName.'.csv');
        } catch (Exception $e) {
            //throw $th;
            return $e;
        }
    }


     public function addCourse(Request $request)
    {
        
        return view('addCourse');
    }

    public function newCoursesfees(Request $request)
    {
        
        return view('newCoursesfees');
    }


     public function saveCourses(Request $request)
       {

        $this->validate($request,[
            'courseName' => 'required|max:255',
            'course_details' => 'required',
            
        ]);

        $courses = new Course;
        $courses->courseName = $request->courseName;
        $courses->course_details = $request->course_details;

        $courses->save();
        return redirect('addcourses')->with('success','Course added successfully');
        
      }

    public function admissionProcess(Request $request)
    {
        
        return view('admission-process');
    }
}