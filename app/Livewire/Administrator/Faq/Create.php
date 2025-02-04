<?php

namespace App\Livewire\Administrator\Faq;

use App\Models\Faq;
use Livewire\Component;

class Create extends Component
{
    public $question;
    public $slug;
    public $answer;
    public $sort_order;

    public function updatedQuestion($value)
    {
        $this->slug = slug($value);
    }

    public function store()
    {
        $rules = [
            'question' => 'required',
            'slug' => 'required',
            'answer' => 'required',
        ];

        $this->validate($rules);

        $this->sort_order = (Faq::max('sort_order') ?? 0) + 1;

        Faq::create([
            'question' => $this->question,
            'slug' => $this->slug,
            'answer' => $this->answer,
            'sort_order' => $this->sort_order,
        ]);

        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'Berhasil menambah FAQ.',
        ]);

        return redirect()->route('administrator.faq');
    }

    public function render()
    {
        return view('livewire.administrator.faq.create');
    }
}
