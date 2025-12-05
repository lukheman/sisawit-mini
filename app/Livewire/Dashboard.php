<?php

namespace App\Livewire;

use App\Enums\Role;
use App\Models\KasPembayaran;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dashboard')]
class Dashboard extends Component
{
    public $user;

    public function mount()
    {
        $this->user = auth()->user();
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
