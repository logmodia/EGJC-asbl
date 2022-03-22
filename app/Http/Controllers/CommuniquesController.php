<?php

namespace App\Http\Controllers;

use App\Models\member;
use App\Models\communique;
use Illuminate\Support\Str;
use App\Models\newscategory;
use Illuminate\Http\Request;

class CommuniquesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $communiques = communique::orderBy('created_at','ASC')
        ->get();

        //dd($members[0]->pivot->id);

        return view('layouts.features.boards.board_communique',['communiques' => $communiques]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Used to select the corresponding form view when you call the form for create
        $communique=[];
        $formView ='create';

        $newscategories = newscategory::orderBy("name")->get();
        $members = member::orderBy("firstname")->get();

        $member_id = '';
        $newscategory_id = '';

        return view('layouts.features.forms.form_communique',
            compact([
                'formView'=>'formView',
                'communique'=>'communique',
                'newscategories'=>'newscategories',
                'members'=>'members',
                'member_id'=>'member_id',
                'newscategory_id'=>'newscategory_id',
            ])
        );
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
            'title'=>['required','max:60','min:1'],
            'content'=>['required','min:1'],
            'expiration'=>['required'],
            'member_id'=>['required'],
            'newscategory_id'=>['required'],
        ]);

        $communique = communique::create([
            'title'=>Str::ucfirst($request->title),
            'content'=>Str::ucfirst($request->content),
            'expiration'=>$request->expiration,
            'member_id'=>$request->member_id,
            'newscategory_id'=>$request->newscategory_id,
        ]);
        
        return redirect()->back()->with('success','created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\communique  $communique
     * @return \Illuminate\Http\Response
     */
    public function show(communique $communique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\communique  $communique
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Used to select the corresponding form view when you call the form for edit
        $communique = communique::findOrfail($id);
        $formView ='edit';
        $cancelRoute = route('communique_all');

        $newscategories = newscategory::orderBy("name")->get();
        $members = member::orderBy("firstname")->get();

        $member_id = $communique->member_id;
        $newscategory_id = $communique->newscategory_id;

        return view('layouts.features.forms.form_communique',
            compact([
                'communique'=>'communique',
                'newscategories'=>'newscategories',
                'members'=>'members',
                'member_id'=>'member_id',
                'newscategory_id'=>'newscategory_id',
                'formView'=>'formView',
                'cancelRoute'=>'cancelRoute'
            ])
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\communique  $communique
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([ //input fields have not to be empty
            'title'=>['required','max:60','min:1'],
            'content'=>['required','min:1'],
            'expiration'=>['required'],
            'member_id'=>['required'],
            'newscategory_id'=>['required'],
        ]);

        $id = $request->communique_id;
        $communique = communique::where('id',$id)->firstOrFail();

        $communique->update([
            'title'=>Str::ucfirst($request->title),
            'content'=>Str::ucfirst($request->content),
            'expiration'=>$request->expiration,
            'member_id'=>$request->member_id,
            'newscategory_id'=>$request->newscategory_id,
        ]);

        $route = route('communique_all');

        return redirect()->back()
        ->with('success','updated')
        ->with('route',$route);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\communique  $communique
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        communique::destroy($id);

        return redirect()->action([CommuniquesController::class,'index']);
    }
}
