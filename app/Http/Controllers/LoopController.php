<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class LoopController extends PublicSiteController
{
    private $pageData;
    
    /**
     * Set up default items used in the controller.
     * @param Page   $page
     */
    public function __construct(Page $page)
    {
        // Initialise parent constructor, passing in controller type value.
        parent::__construct('page');

        // Set loop limit.
        $loopLimit = $this->globalOptions
                        ->where('option_name', 'post_loop_limit')
                        ->first()
                        ->option_value;

        // Fetch page data for article loop.
        $this->pageData = $page->where('status', 'published')
                                ->paginate($loopLimit);  
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
            'menuData' => $this->menuData,
            'pageData' => $this->pageData,
            'sidebarData' => $this->sidebarData
        ]);
    }
}