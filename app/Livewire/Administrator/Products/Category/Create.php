<?php

namespace App\Livewire\Administrator\Products\Category;

use App\Models\ProductCategory;
use Livewire\Component;
use Illuminate\Support\Str;

class Create extends Component
{
    // Variable
    public $name;
    public $slug;

    public function updatedName($value)
    {
        $this->slug = Str::slug($value);
    }

    public function store()
    {
        $rules = [
            'name' => 'required',
            'slug' => 'required|unique:products,slug',
        ];

        $this->validate($rules);

        ProductCategory::create([
            'name' => $this->name,
            'slug' => $this->slug,
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