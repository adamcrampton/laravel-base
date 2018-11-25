<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Option;

class LoopController extends Controller
{
	private $globalOptions;
    public $pageData;

    public function __construct(Page $page, Option $option)
    {
        // Get default options and active page data.
        $this->globalOptions = $option->getGlobalConfig();

        $loopLimit = $this->globalOptions->where('option_name', 'post_loop_limit')->pluck('option_value');

        // dd($loopLimit);

        // $this->pageData = $page->getPages($this->globalOptions->post_loop_limit);
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

        ]);
    }
}
