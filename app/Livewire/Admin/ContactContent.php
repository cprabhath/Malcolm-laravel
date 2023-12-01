<?php

namespace App\Livewire\Admin;

use App\Models\contact;
use App\Models\inquiry;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class ContactContent extends Component
{
    use WithPagination;

    protected $inquiry;
    protected $contact;

    public $form = [
        'firstName' => '',
        'lastName' => '',
        'email' => '',
        'contactNo' => '',
        'subject' => '',
        'Message' =>'',
        'status' => false,
    ];

    public function __construct()
    {
        $this->inquiry = new inquiry();
        $this->contact = new contact();
    }

    public function show_inquiry(int $id){
        $inquire = inquiry::find($id);
        if($inquire){
             $this->form['firstName'] = $inquire->firstName;
             $this->form['lastName'] = $inquire->lastName;
             $this->form['email'] = $inquire->email;
             $this->form['contactNo'] = $inquire->contactNo;
             $this->form['subject'] = $inquire->subject;
             $this->form['Message'] = $inquire->Message;
        }
    }

    #[Layout('livewire.admin.layouts.admin')]
    public function render()
    {
        return view('livewire.admin.contact-content', ['inquiries' => $this->inquiry->paginate(5), 'contacts' => $this->contact->all()]);
    }
}
