<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Option;

class LoopController extends Controller
{
	private $globalOptions;
    private $pageData;

    /**
     * Set up default items used in the controller.
     * @param Page   $page
     * @param Option $option
     */
    public function __construct(Page $page, Option $option)
    {
        // Get default options and active page data.
        $this->globalOptions = $option->getGlobalConfig();

        // Fetch page data for article loop.
        $loopLimit = $this->globalOptions
                        ->where('option_name', 'post_loop_limit')
                        ->first()
                        ->option_value;

        $this->pageData = $page->getPages($loopLimit);

        // dd($this->pageData);
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
            'pageData' => $this->pageData
        ]);
    }
}

