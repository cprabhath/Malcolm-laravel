<?php

namespace App\Livewire\Admin;

use App\Models\Services;
use Exception;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class ServicesContent extends Component
{

    use WithPagination;

    protected $services;
    public $form = [
        'id' => '',
        'heading' => '',
        'description' => '',
        'icon' => ''
    ];

    public function __construct()
    {
        $this->services = new Services();
    }

    public function resetForm(){
        $this->reset('form.id','form.heading', 'form.description','form.icon');
    }

    public function add_service(){
        $this->validate([
            'form.heading' => 'required',
            'form.description' => 'required',
            'form.icon' => 'required'
        ]);

        try{
            Services::create($this->form);
            $this->resetForm();
            $this->dispatch('Added', [
                'type' => 'success',
                'title' => 'Wow!! 😍',
                'text' => 'You just added new service'
            ]);

        }catch(Exception $ex){
            $this->dispatch('AddError', [
                'type' => 'error',
                'title' => 'Something not right 😑',
                'text' => 'Error Code ' . $ex->getPrevious()->getMessage()
            ]);
        }
    }

    public function delete_confirm($id){
        $this->dispatch('deleteConfirm', [
            'type' => 'warning',
            'title' => 'Are you want to Delete? 🤔',
            'text' => 'Please confirm to delete this record',
            'id' => $id
        ]);
    }

    #[On('deleted')]
    public function delete_service($id){
        try{
            Services::where('id', $id)->delete();
        }catch(Exception $ex){
            $this->dispatch('AddError', [
                'type' => 'error',
                'title' => 'Something not right 😑',
                'text' => 'Error Code ' . $ex->getPrevious()->getMessage()
            ]);
        }
    }

    public function edit_service(int $service_id){
        $service = Services::find($service_id);
        if($service){
             $this->form['id'] = $service->id;
             $this->form['heading'] = $service->heading;
             $this->form['description'] = $service->description;
             $this->form['icon'] = $service->icon;
        }
    }

    public function update_service(){
        $this->validate([
            'form.heading' => 'required',
            'form.description' => 'required',
            'form.icon' => 'required'
        ]);

        try{
            Services::where('id', $this->form['id'])->update([
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

    #[Layout('livewire.admin.layouts.admin')]
    public function render()
    {
        return view('livewire.admin.services-content')->with(['services' => $this->services->paginate(5)]);
    }
}
