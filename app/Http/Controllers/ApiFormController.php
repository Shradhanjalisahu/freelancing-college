<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class ApiFormController extends Controller
{
    function add(Request $req)
    {
    	$post= new Post;
    	$post->name=$req->name;
    	$post->email=$req->email;
    	$post->location=$req->location;
    	$post->course=$req->course;
        $post->link=$req->link;
        $post->address=$req->address;
        $post->facilites=$req->facilites;
        $post->mission=$req->mission;
        $post->history=$req->history;
        $post->highlight=$req->highlight;
    	$result=$post->save();
if ($result) {
	return["Result"=>"Data submitted succeeccfuly saved"];
}else{
	return["Return"=>"Data not saved"];
}
    	
   }
}