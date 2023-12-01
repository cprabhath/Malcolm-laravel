<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Layout;
use Livewire\Component;

class PricesContent extends Component
{
    protected $currency;

    #[Layout('livewire.admin.layouts.admin')]
    public function render()
    {
        return view('livewire.admin.prices-content');
    }
}
