<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{	
	/**
	 * Get pages with optional limit.
	 * @param int $limit Limit for query.
	 * @return\Illuminate\Database\Eloquent\Collection
	 */
    public function getPages($limit = 20) 
    {
    	return Page::all()
    			->take($limit);
    }

    /**
     * Get the user who owns this page.
     * @return\Illuminate\Database\Eloquent\Collection
     */
    public function user()
    {
    	return $this->hasOne('App\Models\User', 'id', 'author_user_fk');
    }
}