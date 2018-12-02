<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;
use App\Models\TaxonomyEntity;

class AppController extends Controller
{
    private $controllerType;
    private $optionModel;
    private $taxonomyEntityModel;
    protected $globalOptions;
    protected $sidebarData;
    
    /**
     * Set up default items used in child controllers.
     * @param string $controllerType
     */
    public function __construct($controllerType)
    {
    	// Create instances of required models.
    	$this->optionModel = new Option;
    	$this->taxonomyEntityModel = new TaxonomyEntity;

    	// Set controller type of child class.
    	$this->controllerType = $controllerType;

    	// Get default options and active page data.
        $this->globalOptions = $this->getGlobalConfig();

        // Fetch taxonomy data for sidebar.
        $this->sidebarData = $this->getSidebarData($controllerType);                
    }

    /**
     * Get global config from the Option model.
     * @param  Option $option
     * @return \Illuminate\Database\Eloquent\Collection
     */
    private function getGlobalConfig()
    {
    	return $this->optionModel->getGlobalConfig();
    }

	/**
     * Get all required data for displaying in the front end sidebar.
     * @param  TaxonomyEntity $taxonomyEntity
     * @return array
     */
    private function getSidebarData($controllerType)
    {
        $sidebarData = [];
        $sidebarData['taxonomyData'] = $this->getSidebarTaxonomyData();

        return $sidebarData;
    }

    /**
     * Get taxonomy data for displaying in the front end sidebar.
     * @param  TaxonomyEntity $taxonomyEntity
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
