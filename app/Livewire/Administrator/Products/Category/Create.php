<?php

namespace App\Livewire\Administrator\Products\Category;

use App\Models\Categories;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    // Variable
    public $name;
    public $slug;
    public $description;

    public function updatedName($value)
    {
        $this->slug = slug($value);
    }

    public function store()
    {
        $rules = [
            'name' => 'required',
            'slug' => 'required',
            'description' => 'nullable',
        ];

        $this->validate($rules);

        Categories::create([
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'group' => 'product',
        ]);

        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'Berhasil menambah kategori produk.',
        ]);

        return redirect()->route('administrator.products.category');
    }

    public function render()
    {
        return view('livewire.administrator.products.category.create');
    }
}
