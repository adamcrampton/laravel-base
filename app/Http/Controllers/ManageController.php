<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;
use App\Models\Page;

class ManageController extends AppController
{
    /**
     * Global pagination limit for pages in manage section.
     *
     * @var integer
     */
    protected $paginationLimit;

    /**
     * Set up default items used in the controller.
     * @param string $controllerType
     */
    public function __construct()
    {
        // Initialise parent constructor, passing in controller type value.
        parent::__construct('manage');

        // Get menu items for this page type.
        $this->menuData = $this->extractMenuItems('manage_menu_items');

        // Set global pagination limit for manage section.
        $this->paginationLimit = Option::where('option_name', 'manage_pagination')
                                    ->first()
                                    ->option_value;
                                    
        // Basic auth.
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Return manage home page.
        return view('manage.index', [
            'menu' => $this->menuData,
            'pageTitle' => 'Manage Site',
            'pageIntro' => 'Admin options:'
        ]);
    }

    /**
     * Get page data.
     *
     * @param integer $paginateCount
     * @param string $status
     * @return\Illuminate\Database\Eloquent\Collection
     */
    protected function getPageData($paginateCount = 20, $status = 'published')
    {
        return $this->pageModel->getPagesForManage($paginateCount, $status);
    }
}
