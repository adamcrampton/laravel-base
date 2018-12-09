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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Manage  $manage
     * @return \Illuminate\Http\Response
     */
    public function show(Manage $manage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Manage  $manage
     * @return \Illuminate\Http\Response
     */
    public function edit(Manage $manage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manage  $manage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manage $manage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manage  $manage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manage $manage)
    {
        //
    }
}
