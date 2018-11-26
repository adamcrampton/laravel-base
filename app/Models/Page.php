<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{	
	/**
	 * Get pages with optional limit
	 * @param int $limit Limit for query
	 * @return\Illuminate\Database\Eloquent\Collection Collection of page data
	 */
    public function getPages($limit = 20) {
    	return Page::all()
    			->take($limit);
    }
}