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

    /**
     * Get the taxonomy entities that are connected with this page.
     * @return\Illuminate\Database\Eloquent\Collection
     */
    public function taxonomy_entities()
    {
        return $this->belongsToMany('App\Models\TaxonomyEntity', 'taxonomy_links', 'pages_fk', 'taxonomy_entities_fk');
    }
}