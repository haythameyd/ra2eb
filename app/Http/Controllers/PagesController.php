<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\projects;
use App\cities;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function main()
    {
    	$navbar=TRUE;
    	return  view('pages.index', compact('navbar'));
    }

    public function review($city)
    {
    	$navbar=TRUE;
      if($city=='')
      {
        $city='cairo';
      }
      $proj_res=projects::where('city',$city);
      $cities_res=cities::all();
      return view('pages.review', compact('navbar','proj_res','cities_res','city'));
    }
}
