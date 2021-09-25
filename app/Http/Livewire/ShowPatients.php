<?php

namespace App\Http\Livewire;

use App\Models\Patient;
use Livewire\Component;

class ShowPatients extends Component
{
    public function render()
    {
        return view('livewire.show-patients');
    }
}
