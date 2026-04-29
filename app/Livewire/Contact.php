<?php

namespace App\Livewire;

use App\Models\Contact as ModelsContact;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Contact extends Component
{
    #[Validate('required|min:5|max:100')]
    public $name = '';

    #[Validate('required|numeric|digits_between:10,13')]
    public $phone = '';

    #[Validate('nullable|email:dns|max:100')]
    public $email = '';

    #[Validate('nullable|max:200')]
    public $subject = '';

    #[Validate('required|min:10|max:1000')]
    public $message = '';

    protected function messages()
    {
        return [
            'name.required' => 'Nama wajib diisi!',
            'name.min' => 'Nama minimal 3 karakter!',
            'name.max' => 'Nama maksimal 100 karakter!',

            'phone.required' => 'Nomor HP wajib diisi!',
            'phone.numeric' => 'Nomor HP hanya boleh angka!',
            'phone.digits_between' => 'Nomor HP harus 10-13 digit!',

            'email.email' => 'Format email tidak valid!',
            'email.max' => 'Email maksimal 100 karakter!',

            'subject.max' => 'Subjek maksimal 200 karakter!',

            'message.required' => 'Pesan wajib diisi!',
            'message.min' => 'Pesan minimal 10 karakter!',
            'message.max' => 'Pesan maksimal 1000 karakter!',
        ];
    }

    public function save()
    {
        $this->validate();

        ModelsContact::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

        $this->reset();

        session()->flash('success', 'Pesan berhasil dikirim! Kami akan segera menghubungi Anda.');
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
