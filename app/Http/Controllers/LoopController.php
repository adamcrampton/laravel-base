<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Option;

class LoopController extends Controller
{
    /**
     * Display a listing of pages for loop view.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Return public home page.
        return view('loop.index', [

        ]);
    }
}
