<?php

namespace App\Livewire\Administrator\News\Category;

use App\Models\Categories;
use Livewire\Component;

class Edit extends Component
{
    public $id;

    public $name;
    public $slug;

    public function mount($id)
    {
        $data = Categories::find($id);

        $this->name = $data->name;
        $this->slug = $data->slug;
    }

    public function updatedName($value)
    {
        $this->slug = slug($value);
    }

    public function update()
    {
        $category = Categories::find($this->id);

        // dd($category);
        $rules = [
            'name' => 'required',
        ];

        $this->validate($rules);

        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();

        session()->flash('flash_message', [
            'type' => 'updated',
            'message' => 'Product Category berhasil diperbarui.',
        ]);
        
        return redirect()->route('administrator.news.category');
    }

    public function render()
    {
        return view('livewire.administrator.news.category.edit');
    }
}
