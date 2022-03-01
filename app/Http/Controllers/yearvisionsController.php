<?php

namespace App\Http\Controllers;

use App\Models\Yearvision;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class yearvisionsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $yearvisions = yearvision::all();

        return view('livewire/lw-list-yearvision',compact('yearvisions','yearvisions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Used to select the corresponding form view when you call the form for create
        $yearvision=[];
        $formView ='create';
        return view('layouts.features.dash_yearvision',compact(['formView'=>'formView', 'yearvision'=>'yearvision']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //$vision = new Yearvision();

        /* $vision->year = $request->year;
        $vision->subject = $request->subject;
        $vision->details = $request->details;

        $vision->save(); */

        $request->validate([ //input fields have not to be empty
            'year'=>['required','max:4','min:4','unique:yearvisions'], //year must be unique and has min 4 max 4 characters
            'subject'=>['required','max:60','min:5','unique:yearvisions'],
            'subject_prefix'=>['max:20','min:5'],
        ]);

        $prefix = Str::lower($request->subject_prefix);

        yearvision::create([
            'year'=>$request->year,
            'subject_prefix'=>Str::ucfirst($prefix),
            'subject'=>Str::upper($request->subject),
            'details'=>Str::ucfirst($request->details)
        ]);
        
        return redirect()->back()->with('success','created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\yearVision  $yearVision
     * @return \Illuminate\Http\Response
     */
    public function show(yearVision $yearVision)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\yearVision  $yearVision
     * @return \Illuminate\Http\Response
     */
    public function edit($yearvison_id)
    {
        
        //Used to select the corresponding form view when you call the form for edit
        $yearvision = yearVision::findOrfail($yearvison_id);
        $formView ='edit';
        //dd($yearvision);
        return view('layouts.features.dash_yearvision',compact(['yearvision'=>'yearvision','formView'=>'formView']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\yearVision  $yearVision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([ //input fields have not to be empty
            'year'=>['required','max:4','min:4'], //year must be unique and has min 4 max 4 characters
            'subject'=>['required','max:60','min:5'],
            'subject_prefix'=>['max:30','min:5'],
        ]);

        $yearvision_id = $request->yearvision_id;
        $yearvision = yearVision::where('yearvision_id',$yearvision_id)->firstOrFail();

        $prefix = Str::lower($request->subject_prefix);
        
        $yearvision->update([
            'year'=>$request->year,
            'subject_prefix'=>Str::ucfirst($prefix),
            'subject'=>Str::upper($request->subject),
            'details'=>Str::ucfirst($request->details)
        ]);

        return redirect()->back()->with('success','updated');

    }

    public function destroy(request $request)
    {
        //Used to select the corresponding form view when you call the form for delete
        $formView ='destroy';

        $request->session()->now('delete', 'Veuillez confirmer la suppression s\'il vous plait');
        
        return view('layouts.features.dash_yearvision',compact(['formView'=>'formView']));
    }
    
    //Delete the specified resource ------------------------------------------------
    public function delete(Request $request, $id)
    {
        yearVision::destroy($id);

        return redirect()->action([yearvisionsController::class,'index']);
    }
}
