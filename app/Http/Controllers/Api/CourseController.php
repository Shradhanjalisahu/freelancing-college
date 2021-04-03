<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;

class CourseController extends Controller
{
    public function getCourseFees(Request $request)
    {
        try {
            $reqData = $request->all();
            $where = [];
            if($reqData && isset($reqData['college_id'])){
                $where['coursefees.college_id'] = $reqData['college_id'];
            }
            $diets = DB::table('coursefees')
                ->where($where)
                ->select('coursefees.course_id', 'coursefees.course_fees', 'coursefees.course_type', 'coursefees.course_duration', 'courses.course_details', 'courses.courseName', 'colleges.collegeName')
                ->join('courses', 'courses.id', '=', 'coursefees.course_id')
                ->join('colleges', 'colleges.id', '=', 'coursefees.college_id')
                ->get();
            
            return [
                'status' => true,
                'data' => $diets,
                'message' => ''
            ];
        } catch (Exception $e) {
            return [
                'status' => false,
                'data' => [],
                'message' => 'Internal Server Error'
            ];
        }
        
        
    }
}
