<?php

namespace App\Livewire\Admin\Components;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\On;

class Logout extends Component
{
    #[On('logged-out')]
    public function logout(): void
    {
        Auth::logout();
        $this->redirect(route('login'));
    }

    public function confirmLogout(): void
    {
        $this->dispatch('ConfirmMessage', [
            'type' => 'info',
            'title' => 'Are you going to leave me? 🥺',
            'text' => 'Please confirm to logout'
        ]);
    }

    public function render()
    {
        return view('livewire.admin.components.logout');
    }
}
