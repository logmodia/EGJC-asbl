<?php

namespace App\Http\Controllers;

use App\Models\Yearvision;
use Illuminate\Http\Request;

class homepageController extends Controller
{
    public function index() {
        $year = Yearvision::max('year');
        $Yearvision = Yearvision::where('year',$year)->first('subject');
        $Yearvision = $Yearvision['subject'];

        //dd($currentYearvision);

        return view('layouts.home',compact(['year'=>'year','yearvision'=>'Yearvision']));
    }
}
