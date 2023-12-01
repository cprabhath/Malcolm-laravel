<?php

namespace App\Livewire\Common;

use App\Models\contact as ModelsContact;
use App\Models\inquiry;
use Exception;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Contact extends Component
{

    protected $contact;

    public $form = [
        'firstName' => '',
        'lastName' => '',
        'email' => '',
        'contactNo' => '',
        'subject' => '',
        'Message' =>'',
    ];

    public function __construct()
    {
        $this->contact = new ModelsContact();
    }

    public function makeInquiry(){
       $this->validate([
            'form.firstName' => 'required',
            'form.lastName' => 'required',
            'form.email' => 'required|email',
            'form.contactNo' => 'required|max:15',
            'form.Message' => 'required',
        ]);

        try{
            inquiry::create($this->form);
            $this->dispatch('Success', [
                'type' => 'success',
                'title' => 'You just did 💕',
                'text' => 'Thank you for your inquiry. We will conatct you within 2 business days'
            ]);
        }catch(Exception $ex){
            dd($ex->getPrevious()->getMessage());
        }
    }

    #[Layout('livewire.common.layouts.app')]
    public function render()
    {
        try{
            return view('livewire.common.contact')->with(['contacts' => $this->contact->all()]);
        }catch(Exception $ex){
            return view('livewire.common.error');
        }
    }
}
