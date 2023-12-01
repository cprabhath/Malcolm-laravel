<?php

namespace App\Livewire\Common;

use App\Models\about as ModelsAbout;
use Exception;
use Livewire\Attributes\Layout;
use Livewire\Component;

class About extends Component
{

    protected $about;

    public function __construct()
    {
        $this->about = new ModelsAbout();
    }

    #[Layout('livewire.common.layouts.app')]
    public function render()
    {
        try{
            return view('livewire.common.about')->with(['abouts' => $this->about->all()]);
        }catch(Exception $ex){
            return view('livewire.common.error');
        }
    }
}
