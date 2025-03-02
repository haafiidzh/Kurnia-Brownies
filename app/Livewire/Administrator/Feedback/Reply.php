<?php

namespace App\Livewire\Administrator\Feedback;

use App\Mail\ReplyFeedback;
use App\Models\Feedback;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Reply extends Component
{
    public $data;
    public $to;
    public $message;
    public $reply;

    public function mount($id)
    {
        $this->data = Feedback::find($id);
        $this->message = $this->data->message;
        $this->to = $this->data->email;
    }

    public function sendReply()
    {
        $feedback = $this->data;
        $feedback->update([
            'status' => 'resolved',
        ]);

        $data = [
            'from' => cache('contact-email'),
            'to' => $this->to,
            'message' => $this->message,
            'reply' => $this->reply,
        ];

        Mail::to($this->to)->queue(new ReplyFeedback($data));

        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'Balasan berhasil dikirim.',
        ]);

        return redirect()->route('administrator.feedback');
    }

    public function render()
    {
        return view('livewire.administrator.feedback.reply');
    }
}
