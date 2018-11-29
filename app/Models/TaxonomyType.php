<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaxonomyType extends Model
{
    /**
     * Get taxonomy entities by taxonomy type.
     * @return\Illuminate\Database\Eloquent\Collection
     */
    public function taxonomy_entities()
    {
    	return $this->belongsToMany('App\Models\TaxonomyEntity', 'taxonomy_types_fk');
    }
}
