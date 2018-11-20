<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
	public functon getGlobalConfig() {
		// TODO: Fetch global options.
    	return ['post_loop_limit' => 5];	
	}
    
}
