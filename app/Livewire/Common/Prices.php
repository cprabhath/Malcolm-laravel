<?php

namespace App\Livewire\Common;

use App\Models\Prices as ModelsPrices;
use Livewire\Component;
use Exception;
use Livewire\Attributes\Layout;

class Prices extends Component
{

    protected $currency;

    public function __construct()
    {
        $this->currency = new ModelsPrices();
    }

    #[Layout('livewire.common.layouts.app')]
    public function render()
    {
        try{
            return view('livewire.common.prices')->with(['currencies' => $this->currency->all()]);
        }catch(Exception $ex){
            return view('livewire.common.error');
        }
    }
}
