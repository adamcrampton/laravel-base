<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{	
	/**
	 * Fetch all global options
	 * @return\Illuminate\Database\Eloquent\Collection
	 */
	public function getGlobalConfig() {
    	return Option::all();	
	}
}