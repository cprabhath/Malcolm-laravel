<?php

namespace App\Livewire\Admin;

use App\Models\welcome;
use Exception;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class MainContent extends Component
{
    use WithPagination;

    protected $welcomeHeading;
    public $form = [
        'id' => '',
        'heading' => '',
        'description' => '',
        'image' => ''
    ];

    public function __construct()
    {
        $this->welcomeHeading = new welcome();
    }

    public function updateWelcome(){
        $this->validate([
            'form.heading' => 'required',
            'form.description' => 'required',
            'form.icon' => 'required'
        ]);

        try{
            welcome::where('id', $this->form['id'])->update([
                'heading' => $this->form['heading'],
                'description' => $this->form['description'],
                'icon' => $this->form['icon']
            ]);
            $this->dispatch('Updated', [
                'type' => 'success',
                'title' => 'Wow!! 😍',
                'text' => 'You just updated your services'
            ]);
        }catch(Exception $ex){
            $this->dispatch('AddError', [
                'type' => 'error',
                'title' => 'Something not right 😑',
                'text' => 'Error Code ' . $ex->getPrevious()->getMessage()
            ]);
        }
    }

    public function deleteWelcome($id){
        try{
            welcome::where('id', $id)->delete();
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
        return view('livewire.admin.main-content')->with(['welcomeHeadings' => $this->welcomeHeading->paginate(5)]);
    }
}
