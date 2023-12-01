<?php

namespace App\Livewire\Admin;

use App\Livewire\Common\Welcome;
use App\Models\Gallery;
use App\Models\welcome as ModelsWelcome;
use Exception;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class GalleryContent extends Component
{
    use WithPagination;

    protected $gallery;
    public $form = [
        'heading' => '',
        'description' => '',
        'image' => ''
    ];

    public function __construct()
    {
        $this->gallery = new ModelsWelcome();
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
            Gallery::create($this->form);
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
    public function delete_gallery($id){
        try{
            Gallery::where('id', $id)->delete();
        }catch(Exception $ex){
            $this->dispatch('AddError', [
                'type' => 'error',
                'title' => 'Something not right 😑',
                'text' => 'Error Code ' . $ex->getPrevious()->getMessage()
            ]);
        }
    }

    public function edit_galley(int $albem_id){
        $albem_id = Gallery::find($albem_id);
        if($albem_id){
             $this->form['id'] = $albem_id->id;
             $this->form['heading'] = $albem_id->heading;
             $this->form['description'] = $albem_id->description;
             $this->form['image'] = $albem_id->icon;
        }
    }

    public function update_gallery(){
        $this->validate([
            'form.heading' => 'required',
            'form.description' => 'required',
            'form.icon' => 'required'
        ]);

        try{
            Gallery::where('id', $this->form['id'])->update([
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
        return view('livewire.admin.gallery-content')->with(['albems' => $this->gallery->paginate(5)]);
    }
}
