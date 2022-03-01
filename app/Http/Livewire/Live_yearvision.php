<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Yearvision;

class Live_yearvision extends Component
{
    //Help to select 
    public $formView;
    public $form_RouteAction;
    public $subject_prefix;
    public $subject;
    public $year;
    public $details;
    public $yearvision_id;
    public $id_0;
    public $yearFound;
    public $activUpdate;
    public $yearvision;

    public function lw_search_yearvision()
    {
        $yearvision = Yearvision::where('year',$this->year)->first();

        if (isset($yearvision)){
            $this->subject = $yearvision->subject;
            $this->details = $yearvision->details;
            $this->subject_prefix = $yearvision->subject_prefix;
            $this->yearvision_id = $yearvision->yearvision_id;
            $this->id_0 = $yearvision->yearvision_id;
            
            $this->yearFound = true;
        }else{
            $this->yearFound = false;

            $this->reset(['subject','details','subject_prefix','yearvision_id']);
            

        }


        //['subject'=>Yearvision::where('year','like',"%{$this->year}%")->get()]
    }

    public function updated()
    {
        if ($this->formView === 'create'){
            $this->form_RouteAction = "{{Route('yearvision_store')}}";
            //dd($this->form_RouteAction);
            
        }elseif($this->formView === 'edit'){
            $this->form_RouteAction = "{{Route('yearvision_update')}}";

        }elseif($this->formView === 'destroy'){
            $this->form_RouteAction = "{{Route('yearvision_delete')}}";

        }
    }

    public function render()
    {
        return view('livewire.live_yearvision');
    }
}
