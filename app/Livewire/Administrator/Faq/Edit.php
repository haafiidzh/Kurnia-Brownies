<?php

namespace App\Livewire\Administrator\Faq;

use App\Models\Faq;
use Livewire\Component;

class Edit extends Component
{
    // Variable
    public $id;

    public $question;
    public $slug;
    public $answer;
    public $sort_order;

    public function mount($id)
    {
        $this->id = Faq::find($id);
        $data = $this->id;

        $this->question = $data->question;
        $this->slug = $data->slug;
        $this->answer = $data->answer;
    }

    public function updatedQuestion($value)
    {
        $this->slug = slug($value);
    }

    public function update()
    {
        $data = $this->id;

        $rules = [
            'question' => 'required',
            'slug' => 'required|unique:faqs,slug,' . $data->id,
            'answer' => 'required',
        ];

        $this->validate($rules);

        $data->update([
            'question' => $this->question,
            'slug' => $this->slug,
            'answer' => $this->answer,
        ]);

        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'FAQ berhasil diperbarui.',
        ]);

        return redirect()->route('administrator.faq');
    }

    public function render()
    {
        $data = $this->id;
        return view('livewire.administrator.faq.edit', ['data' => $data]);
    }
}
