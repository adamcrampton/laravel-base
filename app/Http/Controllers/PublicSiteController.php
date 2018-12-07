<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicSiteController extends AppController
{
    protected $sidebarData;
    protected $menuData;

    /**
     * Set up default items used in child controllers that manage public front end tasks.
     * @param string $controllerType
     */
    public function __construct($controllerType)
    {   
        // Initialise parent constructor, passing in controller type value.
        parent::__construct('publicSite');    

        // Get menu data.
        $this->menuData = $this->optionModel->getOptionValue('public_menu_items');

        // Get sidebar data.
        $this->sidebarData = $this->getSidebarData();
    }

    /**
     * Get all required data for displaying in the front end sidebar.
     * @return array
     */
    private function getSidebarData()
    {
        $sidebarData = [];
        $sidebarData['taxonomyData'] = $this->getSidebarTaxonomyData();

        return $sidebarData;
    }

    /**
     * Get taxonomy data for displaying in the front end sidebar.
     * @return array
     */
    private function getSidebarTaxonomyData()
    {
        $taxonomyData = [];

         // Fetch 5 categories.
        $taxonomyData['categoryData'] = $this->taxonomyEntityModel->getEntities('category', 'created_at', 'desc', 5);
        
        // Fetch 5 tags.
        $taxonomyData['tagData'] = $this->taxonomyEntityModel->getEntities('tag', 'created_at', 'desc', 5);

        return $taxonomyData;
    }
}
