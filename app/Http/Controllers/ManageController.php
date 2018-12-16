<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;

class ManageController extends AppController
{
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
}
