<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Layout;
use Livewire\Component;

class ResetPassword extends Component
{
    #[Layout('livewire.admin.layouts.login')]
    public function render()
    {
        return view('livewire.admin.reset-password');
    }
}
