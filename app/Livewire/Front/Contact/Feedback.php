<?php

namespace App\Livewire\Front\Contact;

use App\Mail\FeedbackAdminNotification;
use App\Mail\FeedbackGuestNotification;
use App\Models\Feedback as ModelsFeedback;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Feedback extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $message;
    public $recaptcha;

    protected function rules()
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|regex:/^[0-9]+$/|max:14',
            'message' => 'required|string|max:2000',
            'recaptcha' => 'required',
        ];
    }
    
    protected function messages()
    {
        return [
            'first_name.required' => 'Nama depan harus diisi.',
            'first_name.max' => 'Nama depan maksimal 255 karakter!',
            'last_name.required' => 'Nama belakang harus diisi.',
            'last_name.max' => 'Nama belakang maksimal 255 karakter!',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'phone.required' => 'Nomor telepon harus diisi.',
            'phone.max' => 'Nomor telepon maksimal 14 karakter.',
            'phone.regex' => 'Nomor telepon hanya boleh berisi angka.',
            'message.required' => 'Pesan harus diisi.',
            'message.max' => 'Pesan terlalu panjang!',
            'recaptcha.required' => 'Harap verifikasi Captcha terlebih dahulu.',
        ];
    }

    public function sendFeedback()
    {
        $this->validate();

        $feedback = ModelsFeedback::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
            'status' => 'pending',
        ]);

        Mail::to($this->email)->queue(new FeedbackGuestNotification($feedback));
        Mail::to(cache('contact-email'))->queue(new FeedbackAdminNotification($feedback));
        
        $this->reset();
        $this->dispatch('reset-captcha');
    }    

    public function render()
    {
        return view('livewire.front.contact.feedback');
    }
}
