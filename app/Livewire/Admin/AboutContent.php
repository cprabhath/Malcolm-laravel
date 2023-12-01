<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\about as ModelsAbout;
use Exception;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;

class AboutContent extends Component
{
    use WithFileUploads;
    protected $about;
    public $aboutText = '';
    public $image;
    public $filepath = '';

    public function __construct()
    {
        $this->about = new ModelsAbout();
    }

    public function update_bio()
    {
        $this->validate([
            'aboutText' => 'required',
            'image' => 'required|max:6144|image',
        ]);

        try {
            if ($this->image != null) {
                $this->filepath = $this->image->store('/uploads/about', 'public');
            }

            $form = [
                'description' => $this->aboutText,
                'image' => $this->filepath
            ];

            if (DB::table('abouts')->where('id', 1)->update(['description' => $form['description'], 'image' => $form['image']])) {
                $this->dispatch('Updated', [
                    'type' => 'success',
                    'title' => 'Wow!! 😍',
                    'text' => 'You just updated your bio'
                ]);
            }
            $this->reset('aboutText', 'image');
        } catch (Exception $ex) {
            $this->dispatch('UpdateError', [
                'type' => 'error',
                'title' => 'Something not right 😑',
                'text' => 'Error Code ' . $ex->getPrevious()->getMessage()
            ]);
        }
    }

    #[Layout('livewire.admin.layouts.admin')]
    public function render()
    {
        return view('livewire.admin.about-content')->with(['abouts' => $this->about->all()]);
    }
}
