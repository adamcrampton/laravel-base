<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaxonomyEntity extends Model
{
    /**
     * Get the pages that relate to this taxonomy entity.
     * @return\Illuminate\Database\Eloquent\Collection
     */
    public function pages()
    {
    	return $this->belongsToMany('App\Models\Page', 'taxonomy_links', 'taxonomy_entities_fk', 'pages_fk');
    }

    /**
     * Get taxonomy type for this taxonomy entity.
     * @return\Illuminate\Database\Eloquent\Collection
     */
    public function taxonomy_types()
    {
    	return $this->hasOne('App\Models\TaxonomyType', 'id', 'taxonomy_types_fk');
    }
}