<?php

namespace App\Http\Controllers\viewcontroller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class messageboxController extends Controller
{
    public function index(request $request, $data=null,$data2=null){

        $id = $data;
        $action = "delete";
        $actionRoute = 'yearvision_delete';
        $cancelRoute = 'yearvision_list';

        $x1 = $data2;

        //dd($data2);

        return view('layouts.features.messagebox', compact([
            'id' => 'id',
            'action' => 'action',
            'actionRoute' => 'actionRoute',
            'cancelRoute' => 'cancelRoute'
        ]));
    }
}
