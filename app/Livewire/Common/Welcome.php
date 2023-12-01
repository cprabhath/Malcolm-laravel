<?php

namespace App\Livewire\Common;

use App\Models\welcome as ModelsWelcome;
use Exception;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Welcome extends Component
{
    protected $welcomeHeading;

    public function __construct()
    {
        $this->welcomeHeading = new ModelsWelcome();
    }

    #[Layout('livewire.common.layouts.app')]
    public function render()
    {
        try{
            return view('livewire.common.welcome')->with(['welcomeHeadings' => $this->welcomeHeading->all()]);
        }
        catch(Exception $ex){
            return view('livewire.common.error');
        }
    }
}
