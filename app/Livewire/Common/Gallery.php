<?php

namespace App\Livewire\Common;

use App\Models\Gallery as ModelsGallery;
use Exception;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Gallery extends Component
{

    protected $galley;

    public function __construct()
    {
        $this->galley = new ModelsGallery();
    }


    #[Layout('livewire.common.layouts.app')]
    public function render()
    {
        try{
            return view('livewire.common.gallery')->with(['currencies' => $this->currency->all()]);
        }catch(Exception $ex){
            return view('livewire.common.error');
        }
    }
}
