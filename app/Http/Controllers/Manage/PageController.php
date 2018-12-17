<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\ManageController as ManageController;
use App\Models\Page;

class PageController extends ManageController
{
    private $statusParameter;

    /**
     * Set up default items used in the controller.
     * @param Page $page
     * @param Request $request
     */
    public function __construct(Page $page, Request $request) {
        // Initialise parent constructor, passing in controller type value.
        parent::__construct('page');

        // Determine if status parameter passed in, and set if so.
        $allowedStatuses = ['published', 'draft', 'trash'];

        $this->statusParameter = $request->has('status') && in_array($request->status, $allowedStatuses) ? $request->status : 'published';

        //TODO Fetch posts based on status param
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Return manage pages page.
        return view('manage.page', [
            'menu' => $this->menuData,
            'pageTitle' => 'Manage Pages'
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
     * Display the specified resource - public front end.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
}
