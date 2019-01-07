<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\ManageController as ManageController;
use App\Models\Option;
use App\Models\Page;

class PageController extends ManageController
{
    private $statusParameter;
    private $pageData;

    /**
     * Set up default items used in the controller.
     * @param Page $page
     * @param Request $request
     */
    public function __construct(Page $page, Request $request) {
        // Initialise parent constructor, passing in controller type value.
        parent::__construct('page');

        // Set controller type.
        $this->controllerType = 'page';

        // Determine status parameter to use when fetching page data.
        $this->statusParameter = $this->getStatusParameter($request, $this->pageStatusTypes);

        // Get page data.
        // Note: We will use Tabulator to display the data, so set pagination value (first parameter) to null.
        $this->pageData = $this->getPageData(null, $this->statusParameter);
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
            'pageTitle' => 'Manage Pages',
            'pageData' => $this->pageData,
            'modelName' => $this->controllerType
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

    /**
     * Determine if status parameter passed in, and set if so.
     * Otherwise default is "published".
     *
     * @param \Illuminate\Http\Request $request
     * @param array $allowedStatuses
     * @return string
     */
    private function getStatusParameter($request, $allowedStatuses)
    {
        return $request->has('status') && in_array($request->status, $allowedStatuses) ? $request->status : 'published';
    }
}
