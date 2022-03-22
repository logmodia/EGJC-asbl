<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;
use App\Models\member;
use Livewire\Component;
use App\Models\memberRole;
use App\Models\departement;
use Illuminate\Support\Facades\DB;

class FormEditAssignMemberRole extends Component
{
    public member $member;
    public $pivot_id;
    public $dep_id;
    public $memberRole_id;
    public $firstDep_id;
    public $firstMemberRole_id;
    public bool $addMemberRole;

    protected $rules =[
        "dep_id"=>"required",
        "memberRole_id"=>"required"
    ];


    public function cancel(){
        $this->addMemberRole= false;
        $this->emit('member_assignRoleUpdated'); //Just to reset variables
    }

    public function mount($member,$dep_id,$memberRole_id,$pivot_id,$addMemberRole){
        $this->member = $member;
        $this->pivot_id = $pivot_id;
        $this->dep_id = $dep_id;
        $this->memberRole_id = $memberRole_id;
        $this->addMemberRole = $addMemberRole;
        $this->firstDep_id = departement::first()->dep_id;
        $this->firstMemberRole_id = memberRole::first()->memberRole_id;
    }

    public function updateRole(Request $request)
    {

        $affected = DB::table('departement_member')
                ->where('id', $this->pivot_id)
                ->update(['dep_id'=>$this->dep_id,'memberRole_id'=>$this->memberRole_id]);

        $this->emit('member_assignRoleUpdated');
        
    }

    public function addRole(Request $request)
    {
        if( $this->addMemberRole === true){
            
    
            $affected=DB::table('departement_member')
                ->insert([
                    'member_id'=>$this->member->member_id,
                    'dep_id'=>$this->dep_id,
                    'memberRole_id'=>$this->memberRole_id
            ]);     
    
            $this->emit('member_assignRoleUpdated');

        }
    }

    public function render()
    {
        $departements = departement::all();
        $memberRoles = memberRole::all();
        return view('livewire.form-edit-assign-member-role', ['departements'=>$departements,'memberRoles'=>$memberRoles]);
    }
}
