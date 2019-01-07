<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    /**
     * Get the route key for the model.
     * This allows us to use the uri value from the db rather than ID for routing.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'menu_name';
    }
}
