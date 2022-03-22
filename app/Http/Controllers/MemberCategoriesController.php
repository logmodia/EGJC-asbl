<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\memberCategory;

class MemberCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.features.boards.board_memberCategory')
        ->with('memberCategories',memberCategory::orderBy('categ_name')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Used to select the corresponding form view when you call the form for create
        $memberCategory=[];
        $formView ='create';
        return view('layouts.features.forms.form_memberCategory',compact(['formView'=>'formView', 'memberCategory'=>'memberCategory']));
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
            'categ_name'=>['required','unique:member_categories', 'max:80','min:1'],
        ]);

        memberCategory::create([
            'categ_name'=>Str::ucfirst($request->categ_name),
        ]);
        
        
        return redirect()->back()->with('success','created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\memberCategory  $memberCategory
     * @return \Illuminate\Http\Response
     */
    public function show(memberCategory $memberCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\memberCategory  $memberCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Used to select the corresponding form view when you call the form for edit
        $memberCategory = memberCategory::findOrfail($id);
        $formView ='edit';
        $cancelRoute = route('memberCategory_all');

        return view('layouts.features.forms.form_memberCategory',
        compact([
            'memberCategory'=>'memberCategory',
            'formView'=>'formView',
            'cancelRoute'=>'cancelRoute'
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\memberCategory  $memberCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([ //input fields have not to be empty
            'categ_name'=>['required','max:80','min:1'],
        ]);

        $id = $request->memberCateg_id;
        $memberCategory = memberCategory::where('memberCateg_id',$id)->firstOrFail();

        $memberCategory->update([
            'categ_name'=>Str::ucfirst($request->categ_name),
        ]);
        
        $route = route('memberCategory_all');

        return redirect()->back()
        ->with('success','updated')
        ->with('route',$route);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\memberCategory  $memberCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        memberCategory::destroy($id);

        return redirect()->action([MemberCategoriesController::class,'index']);
    }
}
