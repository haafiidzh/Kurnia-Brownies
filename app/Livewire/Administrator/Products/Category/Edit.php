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
    public $image;
    public $newImage;

    public function mount($id)
    {
        $category = Categories::find($id);

        $this->category = $category;
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->description = $category->description;
        $this->image = $category->image;
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
            'description' => 'required',
            'image' => 'required',
        ];

        $this->validate($rules);

        if ($this->newImage) {
            $path = str_replace('/storage','',$this->image);

            Storage::disk('public')->delete($path);

            $image_name = $this->slug . '.' . $this->newImage->extension();
            $this->newImage->storeAs('images/categories/product', $image_name, 'public');

            $image = '/storage/images/categories/product/' . $image_name;
        } else {
            $image = $this->image;
        }

        $data->update(
            [
                'name' => $this->name,
                'slug' => $this->slug,
                'description' => $this->description,
                'image' => $image
            ]
        );

        session()->flash('flash_message', [
            'type' => 'updated',
            'message' => 'Product Category berhasil diperbarui.',
        ]);
        
        return redirect()->route('administrator.products.category');
    }

    public function render()
    {
        return view('livewire.administrator.products.category.edit');
    }
}
