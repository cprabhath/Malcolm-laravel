<?php

namespace App\Livewire\Common;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Error extends Component
{
    #[Layout('livewire.common.layouts.app')]
    public function render()
    {
        return view('livewire.common.error');
    }
}
