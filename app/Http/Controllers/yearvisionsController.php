<?php

namespace App\Http\Controllers;

use App\Models\Yearvision;
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
        //$currentYear = Yearvision::where('year',2000);
        $currentYear = Yearvision::max('year');
        dd($currentYear);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.features.dash_yearvision');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $vision = new Yearvision();

        /* $vision->year = $request->year;
        $vision->subject = $request->subject;
        $vision->details = $request->details;

        $vision->save(); */

        $request->validate([ //input fields have not to be empty
            'year'=>['required','max:4','min:4','unique:yearvisions'], //year must be unique and has min 4 max 4 characters
            'subject'=>['required','max:60','min:5','unique:yearvisions'],
        ]);

        yearvision::create([
            'year'=>$request->year,
            'subject'=>$request->subject,
            'details'=>$request->details,
        ]);
        
        return redirect()->action([yearvisionsController::class, 'create']);

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
    public function edit(yearVision $yearVision)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\yearVision  $yearVision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, yearVision $yearVision)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\yearVision  $yearVision
     * @return \Illuminate\Http\Response
     */
    public function destroy(yearVision $yearVision)
    {
        //
    }
}
