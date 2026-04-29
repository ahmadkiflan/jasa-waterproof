<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class ServiceSection extends Component
{
    public function render()
    {
        return view('livewire.service-section', [
            'services' => Service::latest()->get(),
        ]);
    }
}
