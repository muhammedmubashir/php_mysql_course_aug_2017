<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Tasks;

class TaskController extends Controller
{
    function __construct()
    {
    	$this->middleware("auth");
    	//0w90Sq14yN4EZs56gwFXEMrJH4M8AYn0I4egbvVy
    }
    function index(Request $request)
    {
    	// dd("hello");
    	// $
		// $tasks = Tasks::find(1);    	
		// dd($tasks);
		$tasks = $request->user()->task()->get();
    	return view("tasks.index",['tasks'=>$tasks]);
    }

    function store(Request $request)
    {
    	
    	//elequoent model  -> ORM
    	//dd($request->name);
    	// facade
    	if($this->validate($request, ['name'=>'required|max:255']))
    	{
    			$request->user()->task()->create(['name'=>$request->name]);
		    	return redirect("/tasks");	
    	}
    	
    }

    //edit
    //delete

    // function profit()
    // {
    // 	user info
    // 	role 

    // 	if($role=="finance")
    // 	{
    // 		return "10000";	
    // 	}
    // 	else
    // 	{
    // 		return "bhag jao";
    // 	}
    	
    // }
}
