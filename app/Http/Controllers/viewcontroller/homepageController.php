<?php

namespace App\Http\Controllers\viewcontroller;
use App\Models\weektopic;

use App\Models\Yearvision;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class homepageController extends Controller
{
    public function index() {
        $headTitle = "Bienvenue !";
        $year = Yearvision::max('year');
        $vision = Yearvision::where('year',$year)->first();
        $Yearvision = $vision['subject'];
        $subject_prefix = $vision['subject_prefix'];
        $yearvision_id = $vision['yearvision_id'];

        $weektopic = weektopic::latest()->first();

        return view('layouts.home',compact([
            'year'=>'year',
            'yearvision'=>'Yearvision',
            'headTitle'=>'headTitle',
            'subject_prefix'=>'subject_prefix',

            'weektopic'=>'weektopic'
        ]));
    }
}
