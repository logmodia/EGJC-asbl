<?php

namespace App\Http\Controllers;

use App\Models\departement;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DepartementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.features.boards.board_departement')
        ->with('departements',departement::orderBy('dep_name')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Used to select the corresponding form view when you call the form for create
        $departement=[];
        $formView ='create';
        return view('layouts.features.forms.form_departement',compact(['formView'=>'formView', 'departement'=>'departement']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([ //input fields have not to be empty
            'dep_name'=>['required','unique:departements', 'max:80','min:5'],
        ]);

        departement::create([
            'dep_name'=>Str::ucfirst($request->dep_name),
        ]);
        
        
        return redirect()->back()->with('success','created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function show(departement $departement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function edit(departement $departement,$id)
    {
        //Used to select the corresponding form view when you call the form for edit
        $departement = departement::findOrfail($id);
        $formView ='edit';
        $cancelRoute = route('departement_all');

        return view('layouts.features.forms.form_departement',
        compact([
            'departement'=>'departement',
            'formView'=>'formView',
            'cancelRoute'=>'cancelRoute'
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([ //input fields have not to be empty
            'dep_name'=>['required','max:80','min:5'],
            'dep_id'=>['required'],
        ]);

        $id = $request->dep_id;
        $departement = departement::where('dep_id',$id)->firstOrFail();

        $departement->update([
            'dep_name'=>Str::ucfirst($request->dep_name),
        ]);
        
        $route = route('departement_all');

        return redirect()->back()
        ->with('success','updated')
        ->with('route',$route);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function destroy(departement $departement,$id)
    {
        departement::destroy($id);

        return redirect()->action([DepartementsController::class,'index']);
    }
}
