<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Option;
use App\Models\TaxonomyEntity;

class LoopController extends Controller
{
	private $globalOptions;
    private $pageData;
    private $sidebarData;

    /**
     * Set up default items used in the controller.
     * @param Page   $page
     * @param Option $option
     * @param TaxonomyEntity $taxonomyEntity
     */
    public function __construct(Page $page, Option $option, TaxonomyEntity $taxonomyEntity)
    {
        // Get default options and active page data.
        $this->globalOptions = $option->getGlobalConfig();

        // Set loop limit.
        $loopLimit = $this->globalOptions
                        ->where('option_name', 'post_loop_limit')
                        ->first()
                        ->option_value;

        // Fetch page data for article loop.
        $this->pageData = $page->getPages($loopLimit);

        // Fetch taxonomy data for sidebar.
        $this->sidebarData = $this->getSidebarData($taxonomyEntity);
    }

    /**
     * Display a listing of pages for loop view.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Page $page)
    {
        // Return public home page.
        return view('loop.index', [
            'pageData' => $this->pageData,
            'sidebarData' => $this->sidebarData
        ]);
    }

    /**
     * Get all required data for displaying in the front end sidebar.
     * @param  TaxonomyEntity $taxonomyEntity
     * @return array
     */
    private function getSidebarData($taxonomyEntity)
    {
        $sidebarData = [];
        $sidebarData['taxonomyData'] = $this->getSidebarTaxonomyData($taxonomyEntity);

        return $sidebarData; 
    }

    /**
     * Get taxonomy data for displaying in the front end sidebar.
     * @param  TaxonomyEntity $taxonomyEntity
     * @return array
     */
    private function getSidebarTaxonomyData($taxonomyEntity)
    {
        $taxonomyData = [];

         // Fetch 5 categories.
        $taxonomyData['categoryData'] = $taxonomyEntity->getEntities('category', 'created_at', 'desc', 5);
        
        // Fetch 5 tags.
        $taxonomyData['tagData'] = $taxonomyEntity->getEntities('tag', 'created_at', 'desc', 5);

        return $taxonomyData;
    }
}

