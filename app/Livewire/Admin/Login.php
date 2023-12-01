<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Login extends Component
{

    public $form = [
        'email' => '',
        'password' => '',
    ];

    public function submit()
    {
        $this->validate([
            'form.email' => 'required|email',
            'form.password' => 'required',
        ]);

//         User::create($this->form);
//         $this->dispatch('loginError', [
//                  'type' => 'success',
//                  'title' => 'Complete',
//                  'text' => 'New user added successfully'
//              ]);

        if (Auth::attempt($this->form)) {
            $this->redirect(route('dashboard'));
        } else {
            $this->dispatch('loginError', [
                'type' => 'error',
                'title' => 'Something not right 😑',
                'text' => 'Would you please check your username and password is correct'
            ]);
        }
    }

    #[Layout('livewire.admin.layouts.login')]
    public function render()
    {
        return view('livewire.admin.login');
    }
}
