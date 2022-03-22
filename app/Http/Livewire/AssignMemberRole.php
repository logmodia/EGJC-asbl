<?php

namespace App\Http\Livewire;

use App\Models\member;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class AssignMemberRole extends Component
{
    public int $editId =0;
    public bool $addMemberRole = false;
    public $member_id;

    protected $listeners = ['member_assignRoleUpdated'=>'onMemberAssignRoleUpdated'];
    
    public function mount($member_id){
        $this->member_id = $member_id;
    }

    public function startEdit(int $id){
        $this->addMemberRole = false;
        $this->editId = $id;
    }

    public function addMemberRole(){
        if($this->addMemberRole === false){
            //$this->reset('editId');
            $this->addMemberRole = true;

        }
    }

    public function onMemberAssignRoleUpdated(){
        $this->reset('editId');
        $this->addMemberRole = false;
    }

    public function deletMemberRole(int $id){
        $affected = DB::table('departement_member')
        ->where('id', $id)
        ->delete();
    }

    public function render()
    {
        return view('livewire.assign-member-role',
            [
                'member' => member::where('member_id',$this->member_id)->get()
            ]
        );
    }
}
