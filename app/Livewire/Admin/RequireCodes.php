<?php

namespace App\Livewire\Admin;

use App\Models\backupCodes;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

class RequireCodes extends Component
{
    public $code;

    public function validateCode(){
        $this->validate([
            'code' => 'required|size:6',
        ]);
        $code = DB::table('backup_codes')->where('code', '=', $this->code)->get();
        if ($code->isNotEmpty()){
            return $this->redirect(route('reset-pass'));
        }else{
            $this->dispatch('codeError', [
                'type' => 'error',
                'title' => 'Something not right 😑',
                'text' => 'Would you please check your backup is correct'
            ]);
        }
    }

    #[Layout('livewire.admin.layouts.login')]
    public function render()
    {
        return view('livewire.admin.require-codes');
    }
}
