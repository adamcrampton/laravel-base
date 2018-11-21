<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
	public function getGlobalConfig() {
		// TODO: Fetch global options.
    	return ['post_loop_limit' => 5];	
	}
    
}
