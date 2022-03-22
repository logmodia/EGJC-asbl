<?php

namespace App\Http\Controllers;

use App\Models\member;
use App\Models\memberRole;
use App\Models\departement;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\memberCategory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = member::orderBy('firstname','ASC')
        ->with('departements')
        ->get();

        //dd($members[0]->pivot->id);

        return view('layouts.features.boards.board_member',['members' => $members]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Used to select the corresponding form view when you call the form for create
        $member=[];
        $formView ='create';

        $memberCategories = memberCategory::orderBy("categ_name")->get();
        $departements = departement::orderBy("dep_name")->get();
        $memberRoles = memberRole::orderBy("role_name")->get();

        $memberCateg_id = '';
        $dep_id = '';
        $memberRole_id = '';

        return view('layouts.features.forms.form_member',
            compact([
                'formView'=>'formView',
                'member'=>'member',
                'memberCategories'=>'memberCategories',
                'departements'=>'departements',
                'memberRoles'=>'memberRoles',
                'memberCateg_id'=>'memberCateg_id',
                'dep_id'=>'dep_id',
                'memberRole_id'=>'memberRole_id',
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
            'firstname'=>['required', 'max:30','min:1'],
            'lastname'=>['required', 'max:30','min:1'],
            'gender'=>['required', 'max:10','min:1'],
            'birthday'=>['required'],
            'memberCateg_id'=>['required'],
            'dep_id'=>['required'],
            'memberRole_id'=>['required'],
        ]);

        if (isset($request->photo)){
            $filename = Str::ucfirst($request->firstname).Str::ucfirst($request->lastname).'_img.'.$request->photo->extension(); //custom filename 
    
            //dd($request->file('avatar')->storeAs('avatartest',$filename)); //store image without using storage facade
            $imgpath = $request->file('photo')->storeAs('images/members',$filename,'public');

        }else{
            $imgpath = 'public/images/members/default.jpg';
            //return redirect()->route('member_create')->withInput();
        }

        $member = member::create([
            'firstname'=>Str::ucfirst($request->firstname),
            'lastname'=>Str::ucfirst($request->lastname),
            'gender'=>$request->gender,
            'birthday'=>$request->birthday,
            'photo'=>$imgpath,
            'memberCateg_id'=>$request->memberCateg_id,
        ]);
        $member->departements()->attach($member->member_id,[
            'dep_id'=>$request->dep_id,
            'memberRole_id'=>$request->memberRole_id
            
        ]);
        
        return redirect()->back()->with('success','created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(member $member)
    {
        //
    }

    public function assignMemberRoles($id)
    {
        return view('layouts.features.boards.board_assignMemberRole',['id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Used to select the corresponding form view when you call the form for edit
        $member = member::findOrfail($id);
        $formView ='edit';
        $cancelRoute = route('member_all');

        $memberCategories = memberCategory::orderBy("categ_name")->get();
        $departements = departement::orderBy("dep_name")->get();
        $memberRoles = memberRole::orderBy("role_name")->get();

        $memberCateg_id = $member->memberCateg_id;
        $dep_id = $member->dep_id;
        $memberRole_id = $member->memberRole_id;

        return view('layouts.features.forms.form_member',
            compact([
                'member'=>'member',
                'memberCategories'=>'memberCategories',
                'departements'=>'departements',
                'memberRoles'=>'memberRoles',
                'memberCateg_id'=>'memberCateg_id',
                'dep_id'=>'dep_id',
                'memberRole_id'=>'memberRole_id',
                'formView'=>'formView',
                'cancelRoute'=>'cancelRoute'
            ])
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([ //input fields have not to be empty
            'firstname'=>['required', 'max:30','min:1'],
            'lastname'=>['required', 'max:30','min:1'],
            'gender'=>['required', 'max:10','min:1'],
            'birthday'=>['required'],
            'memberCateg_id'=>['required'],
        ]);

        $id = $request->member_id;
        $member = member::where('member_id',$id)->firstOrFail();

        if (isset($request->photo)){

            $filename = Str::ucfirst($request->firstname).Str::ucfirst($request->lastname).'_img.'.$request->photo->extension(); //custom filename 
    
            //dd($request->file('avatar')->storeAs('avatartest',$filename)); //store image without using storage facade
            $imgpath = $request->file('photo')->storeAs('images/members',$filename,'public');

        }else{
            $imgpath = $member->photo;
        }

        $member->update([
            'firstname'=>Str::ucfirst($request->firstname),
            'lastname'=>Str::ucfirst($request->lastname),
            'gender'=>$request->gender,
            'birthday'=>$request->birthday,
            'photo'=>$imgpath,
            'memberCateg_id'=>$request->memberCateg_id,
        ]);

        $route = route('member_all');

        return redirect()->back()
        ->with('success','updated')
        ->with('route',$route);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $imgpath=member::find($id)->photo;

        if(File::exists('storage/'.$imgpath)){
            Storage::disk('public')->delete($imgpath);
        }
        
        member::destroy($id);

        return redirect()->action([MembersController::class,'index']);
    }
}
