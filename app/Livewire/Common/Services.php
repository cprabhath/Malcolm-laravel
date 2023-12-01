<?php

namespace App\Livewire\Common;

use App\Models\Services as ModelsServices;
use Exception;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Services extends Component
{
    protected $services;

    public function __construct()
    {
        $this->services = new ModelsServices();
    }

    #[Layout('livewire.common.layouts.app')]
    public function render()
    {
        try{
            return view('livewire.common.services')->with(['services' => $this->services->all()]);
        }catch(Exception $ex){
            return view('livewire.common.error');
        }
    }
}
