<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class blogs extends Controller
{
    //blade template engine
    //model
    //route controller
    //design pattern 
    //facade
    //middleware  
	//return View::make("blogs.index");
	function index()
	{
		$data['blogs'] = ['my first blog','second blog','third blog'];
	    return view("blogs.index",$data);
	}


	function detail($id)
	{
		return view("blogs.details");
	}
}
