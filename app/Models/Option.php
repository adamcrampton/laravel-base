<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{	
	/**
	 * Fetch all global options.
	 * @return\Illuminate\Database\Eloquent\Collection
	 */
	public function getGlobalConfig() 
	{
    	return Option::all();	
	}

	/**
	 * Generic method for returning an option value.
	 *
	 * @param string $optionName
	 * @return\Illuminate\Database\Eloquent\Collection
	 */
	public function getOptionValue($optionName)
	{
		return Option::where('option_name', $optionName)
			->get();
	}
}