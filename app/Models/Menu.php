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

    /**
     * Fetch all data for a type of menu.
     *
     * @param string $menuType
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getMenuData($menuType = 'public-menu')
    {
        return Menu::where('menu_name', $menuType)->first();
    }
}