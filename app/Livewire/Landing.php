<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest')]
class Landing extends Component
{
    public $penyakitList;

    public function render()
    {
        return view('livewire.landing');
    }
}
