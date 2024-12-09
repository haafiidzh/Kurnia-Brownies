<?php

namespace App\Livewire\Administrator\News\Category;

use App\Models\Categories;
use Livewire\Component;

class Create extends Component
{
    // Variable
    public $name;
    public $slug;

    public function updatedName($value)
    {
        $this->slug = slug($value);
    }

    public function store()
    {
        $rules = [
            'name' => 'required',
            'slug' => 'required|unique:news,slug',
        ];

        $this->validate($rules);

        Categories::create([
            'name' => $this->name,
            'slug' => $this->slug,
            'group' => 'news',
        ]);

        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'Kategori berhasil ditambah.',
        ]);

        return redirect()->route('administrator.news.category');
    }

    public function render()
    {
        return view('livewire.administrator.news.category.create');
    }
}
