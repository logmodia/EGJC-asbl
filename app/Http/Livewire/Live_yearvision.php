<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Yearvision;

class Live_yearvision extends Component
{

    public $count = 0;
    public $subject;
    public $year;
    public $details;
    public $yearvision_id;
    public $yearFound;
    public $activUpdate;

 

    public function increment()

    {

        $this->count++;

    }
    public function dincrement()

    {

        $this->count--;

    }

    public function lw_search_yearvision()
    {
        $yearvision = Yearvision::where('year',$this->year)->first();
        
        if (isset($yearvision)){
            $this->subject = $yearvision->subject;
            $this->details = $yearvision->details;
            $this->yearvision_id = $yearvision->yearvision_id;
            
            $this->yearFound = true;
        }else{
            $this->yearFound = false;

        }


        //['subject'=>Yearvision::where('year','like',"%{$this->year}%")->get()]
    }

    public function activUpdate()
    {
        if ($this->activUpdate === false){
            $this->activUpdate = true;
        }else{
            $this->activUpdate = true;

        }
    }

    public function render()
    {
        return view('livewire.live_yearvision');
    }
}
