<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
	public function getGlobalConfig() {
		// Fetch all global options.
    	return Option::all();	
	}
    
}
