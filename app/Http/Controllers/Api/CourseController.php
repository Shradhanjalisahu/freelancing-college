<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function getCourseDetail(Request $request)
    {
        return array("data" => "Hello World");
    }
}
