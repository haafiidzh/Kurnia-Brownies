<?php

namespace App\Livewire\Administrator\Products\Category;

use App\Models\Categories;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public Categories $category;

    public $name;
    public $slug;
    public $description;

    public function mount($id)
    {
        $category = Categories::find($id);

        $this->category = $category;
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->description = $category->description;
    }

    public function updatedName($value)
    {
        $this->slug = slug($value);
    }

    public function update()
    {
        $data = $this->category;

        $rules = [
            'name' => 'required',
            'slug' => 'required',
            'description' => 'nullable',
        ];

        $this->validate($rules);

        $data->update(
            [
                'name' => $this->name,
                'slug' => $this->slug,
                'description' => $this->description,
            ]
        );

        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'Berhasil memperbarui kategori produk.',
        ]);
        
        return redirect()->route('administrator.products.category');
    }

    public function render()
    {
        return view('livewire.administrator.products.category.edit');
    }
}
