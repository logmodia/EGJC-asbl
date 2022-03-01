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
        $vision = Yearvision::where('year',$year)->first();
        $Yearvision = $vision['subject'];
        $subject_prefix = $vision['subject_prefix'];
        $yearvision_id = $vision['yearvision_id'];

        return view('layouts.home',compact([
            'year'=>'year',
            'yearvision'=>'Yearvision',
            'headTitle'=>'headTitle',
            'subject_prefix'=>'subject_prefix'
        ]));
    }
}
