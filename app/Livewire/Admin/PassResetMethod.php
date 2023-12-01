<?php

namespace App\Livewire\Admin;
use Livewire\Attributes\Layout;
use Livewire\Component;

use function Laravel\Prompts\alert;

class PassResetMethod extends Component
{

    public function sendCode(){
        $this->dispatch('SendEmail', [
            'type' => 'success',
            'title' => 'Great..!!! 😉',
            'text' => 'Now Check your inbox..'
        ]);
    }

    #[Layout('livewire.admin.layouts.login')]
    public function render()
    {
        return view('livewire.admin.pass-reset-method');
    }
}
