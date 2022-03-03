<?php

namespace App\Http\Controllers\viewcontroller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class messageboxController extends Controller
{
    public function index(request $request, $id=null,$action=null,$actionRoute,$cancelRoute=Null){

        $id = $id;
        $action = $action;
        $actionRoute = route($actionRoute);
        $cancelRoute = route($cancelRoute);

       // $x1 = $data2;

        //dd($id,$action,$actionRoute,$cancelRoute);

        return view('layouts.features.messagebox', compact([
            'id' => 'id',
            'action' => 'action',
            'actionRoute' => 'actionRoute',
            'cancelRoute' => 'cancelRoute'
        ]));
    }
}
