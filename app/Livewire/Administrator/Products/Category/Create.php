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
    public $image;

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

        $image_name = $this->slug . '.' . $this->image->extension();
        $this->image->storeAs('images/categories/product', $image_name, 'public');

        $image = '/storage/images/categories/product/' . $image_name;

        Categories::create([
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'image' => $image,
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
