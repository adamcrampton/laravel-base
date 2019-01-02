<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{	
    /**
     * Get the route key for the model.
     * This allows us to use the uri value from the db rather than ID for routing.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'uri';
    }

	/**
	 * Get pages with optional limit.
	 * @param int $limit Limit for query.
	 * @return \Illuminate\Database\Eloquent\Collection
	 */
    public function getPages($limit = 20) 
    {
    	$pageData = Page::all()
                ->take($limit);
                
        // Add author names.
        $pageData = $this->appendAuthors($pageData);

        return $pageData;
    }

    /**
     * Get pages for admin with optional pagination count and status flag.
     *
     * @param integer $paginateCount
     * @param string $status
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getPagesForManage($paginateCount = 20, $status = 'published')
    {
        // Return a paginated object if Laravel pagination is being used.
        // Otherwise, just return the collection.
        // Note: These return different types of objects - so ensure your code expects the correct data format.
        $pageData = Page::where('status', $status)
        ->when($paginateCount, 
            function($query, $paginateCount) {
                return $query->paginate($paginateCount);
            },
            function($query) {
                return $query->get();
            }
        );

        // Add author names.
        $pageData = $this->appendAuthors($pageData);

        return $pageData;
    }

    /**
     * // Insert author names into the collection so they're available when we convert to JSON.
     *
     * @param \Illuminate\Database\Eloquent\Collection $pageData
     * @return \Illuminate\Database\Eloquent\Collection
     */
    private function appendAuthors($pageData)
    {
        $pageData->each(function($item, $key) {
            $item->author = $item->user->name;
        });

        return $pageData;
    }

    /**
     * Get the user who owns this page.
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function user()
    {
    	return $this->hasOne('App\Models\User', 'id', 'author_user_fk');
    }

    /**
     * Get the taxonomy entities that are connected with this page.
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function taxonomy_entities()
    {
        return $this->belongsToMany('App\Models\TaxonomyEntity', 'taxonomy_links', 'pages_fk', 'taxonomy_entities_fk');
    }
}