<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaxonomyEntity extends Model
{
	/**
	 * Get a list of entities with optional order by and limit parameters.
	 * @param  string  $taxonomyType
	 * @param  string  $orderColumn
	 * @param  string  $orderDirection
	 * @param  integer $limit
	 * @return @return\Illuminate\Database\Eloquent\Collection
	 */
	public function getEntities($taxonomyType = 'category', $orderColumn = 'created_at', $orderDirection = 'desc', $limit = 5)
	{
		$entityData = TaxonomyEntity::whereHas('taxonomy_types', function($query) use ($taxonomyType, $orderColumn, $orderDirection, $limit) {
			$query->where('taxonomy_type_name', $taxonomyType)
					->orderBy($orderColumn, $orderDirection)
					->take($limit);
		})->get();

		return $entityData;
	}

    /**
     * Get taxonomy type for this taxonomy entity.
     * @return\Illuminate\Database\Eloquent\Collection
     */
    public function taxonomy_types()
    {
    	return $this->hasMany('App\Models\TaxonomyType', 'id', 'taxonomy_types_fk');
    }
}