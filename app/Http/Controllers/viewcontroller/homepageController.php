<?php

namespace App\Http\Controllers\viewcontroller;
use App\Http\Controllers\Controller;

use App\Models\Yearvision;
use Illuminate\Http\Request;

class homepageController extends Controller
{
    public function index() {
        $headTitle = "Bienvenue !";
        $year = Yearvision::max('year');
        $Yearvision = Yearvision::where('year',$year)->first('subject');
        $Yearvision = $Yearvision['subject'];

        return view('layouts.home',compact(['year'=>'year','yearvision'=>'Yearvision','headTitle'=>'headTitle']));
    }
}
