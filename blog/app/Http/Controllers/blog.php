<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class blog extends Controller
{
    //
    function index()
    {
    	return view("blog.lists");

    	echo "this is my first controller";
    }

    function lists()
    {
    	$info['firstname'] 	= "Muhammad";
    	$info['lastname'] 	= "Areeb";
    	$info['detail'] 	= "<b>bla bla bla</b>";
    	// $age = 20;
    	//return view("blog.lists")->with("info",$info);
    	return view("blog.lists",$info);
    	//return view("blog.lists",compact("age","",));
    }
}
