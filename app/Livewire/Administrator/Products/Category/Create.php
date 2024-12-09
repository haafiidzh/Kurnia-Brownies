<?php

namespace App\Livewire\Administrator\Products\Category;

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
            'slug' => 'required|unique:products,slug',
        ];

        $this->validate($rules);

        Categories::create([
            'name' => $this->name,
            'slug' => $this->slug,
            'group' => 'product',
        ]);

        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'Kategori berhasil ditambah.',
        ]);

        return redirect()->route('administrator.products.category');
    }

    public function render()
    {
        return view('livewire.administrator.products.category.create');
    }
}
