<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\newscategory;
use Illuminate\Http\Request;

class NewscategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.features.boards.board_newscategory')
        ->with('newscategories',newscategory::orderBy('name')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Used to select the corresponding form view when you call the form for create
        $newscategory=[];
        $formView ='create';
        return view('layouts.features.forms.form_newscategory',compact(['formView'=>'formView', 'newscategory'=>'newscategory']));
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
            'name'=>['required','unique:newscategories', 'max:30','min:1'], // has min 4 max 4 characters
        ]);

        newscategory::create([
            'name'=>Str::ucfirst($request->name),
        ]);
        
        
        return redirect()->back()->with('success','created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\weektopic  $weektopic
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\weektopic  $weektopic
     * @return \Illuminate\Http\Response
     */
    public function edit($id = Null)
    {
        //Used to select the corresponding form view when you call the form for edit
        $newscategory = newscategory::findOrfail($id);
        $formView ='edit';
        $cancelRoute = route('newscategory_all');

        return view('layouts.features.forms.form_newscategory',
        compact([
            'newscategory'=>'newscategory',
            'formView'=>'formView',
            'cancelRoute'=>'cancelRoute'
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\weektopic  $weektopic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, newscategory $newscategory)
    {
        $request->validate([ //input fields have not to be empty
            'name'=>['required','max:30','min:1'],
        ]);

        $id = $request->id;
        $weektopic = newscategory::where('id',$id)->firstOrFail();

        $weektopic->update([
            'name'=>Str::ucfirst($request->name),
        ]);

        $route = route('newscategory_all');

        return redirect()->back()
        ->with('success','updated')
        ->with('route',$route);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\weektopic  $weektopic
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request,$id)
    {
        newscategory::destroy($id);

        return redirect()->action([NewscategoryController::class,'index']);
    }
}
