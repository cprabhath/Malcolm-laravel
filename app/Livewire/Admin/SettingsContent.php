<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Exception;
use Livewire\Attributes\Layout;
use Livewire\Component;

class SettingsContent extends Component
{
    public $name;
    public $current_pass;
    public $new_pass;
    public $confirm_pass;

    public $form = [
        'current_pass' => '',
        'new_pass' => '',
        'confirm_pass' => ''
    ];

    public function change_password(){
            $this->validate([
                'form.current_pass' => 'required',
                'form.new_pass' => 'required',
                'form.confirm_pass' => 'required'
            ]);

            try{
                User::where('id', $this->form['id'])->update([
                    'password' => $this->form['confirm_pass'],
                ]);
                $this->dispatch('Updated', [
                    'type' => 'success',
                    'title' => 'Wow!! 😍',
                    'text' => 'You just updated your password'
                ]);
            }catch(Exception $ex){
                $this->dispatch('AddError', [
                    'type' => 'error',
                    'title' => 'Something not right 😑',
                    'text' => 'Error Code ' . $ex->getPrevious()->getMessage()
                ]);

            }
    }

    #[Layout('livewire.admin.layouts.admin')]
    public function render()
    {
        return view('livewire.admin.settings-content');
    }
}
