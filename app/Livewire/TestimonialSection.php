<?php

namespace App\Livewire;

use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithPagination;

class TestimonialSection extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.testimonial-section', [
            'testimonials' => Testimonial::approved()
                ->latest()
                ->get(),
        ]);
    }
}
