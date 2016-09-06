<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\projects;
use App\cities;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

class PagesController extends Controller
{
    public function main()
    {
    	$navbar=TRUE;
      Mapper::map(30.0444196,31.23571160000006, ['zoom' => 9,'marker' => false,'type' => 'ROADMAP']);
      $mapped_prj=projects::where('lng','!=',0)->get();
      foreach ($mapped_prj as $prj)
      {
        // Mapper::marker($prj->lat, $prj->lng, ['symbol' => 'circle', 'scale' => 1000, 'title' => $prj->title, 'icon' => 'http://maps.google.com/mapfiles/ms/icons/blue.png']);
        $content="
        <div style='width:180px' align='center'><h5><b>".$prj->prj_name."</b></h5> <p>".$prj->short_desc."</p>
        <p><b>تقييم المشروع: ".$this->disp_review($prj->rating_total)." </b></p>
        <button align='center' type='button' class='btn btn-success'>قيم المشروع</button>
        </div>";
        Mapper::informationWindow($prj->lat, $prj->lng,$content, ['markers' => ['animation' => 'DROP', 'symbol' => 'circle', 'scale' => 1000, 'title' => $prj->title]]);
      }
      return  view('pages.index', compact('navbar'));
    }

    public function review($city=null)
    {
    	$navbar=TRUE;
      if($city=='')
      {
        $city='cairo';
        $city_ar='القاهرة';
        $city_id=12;
      }
      $proj_res=projects::where('city',$city_id)->get();
      $cities_res=cities::all();
      return view('pages.review', compact('navbar','proj_res','cities_res','city','city_ar'));
    }

    public function disp_review($rating)
    {
      $rate=ceil($rating);
      $code="";
      for($i=$rate;$i>0;$i--) {
        $code=$code.'<span class="glyphicon glyphicon-star" aria-hidden="true" style="color:green;"> </span>';
      }
      for($i=5-$rate;$i>0;$i--) {
        $code=$code.'<span class="glyphicon glyphicon-star-empty" aria-hidden="true" style="color:grey;"> </span>';
      }
      return $code;
    }
}
