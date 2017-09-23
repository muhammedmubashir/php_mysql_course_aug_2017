<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    //
    // Tasks
    // id, user_id, name,...
	// protected $id = 'task_id';
	// protected $table = "tasks";

    protected $fillable = ['name'];

    //relations

	    public function user()
	    {
	    	return $this->belongsTo(User::class);
	    }
}
