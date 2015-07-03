<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function main()
    {
    	$navbar=TRUE;
    	return  view('pages.index', compact('navbar'));
    }

    public function review()
    {
    	$navbar=TRUE;
    	return view('pages.review', compact('navbar'));
    }
}
