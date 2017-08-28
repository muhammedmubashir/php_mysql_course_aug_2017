<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
//model include
use App\users;

class UsersController extends Controller
{
    function index()
    {
    	// $data['users'] = users::findAll();
    	$data['users'] = users::findOrFail(1);
    	dd($data);
    	//list of users
    }

    function create()
    {
    	//user creation form
    }

    function store()
    {
    	//insert user
    }

    function edit($id)
    {
    	//edit form with prepopulated values
    }

    function update($id)
    {
    	//user update query
    }

    function show($id)
    {
    	//single user display
    }

    function destroy($id)
    {

    }

}
