<?php

namespace App\Livewire\Administrator\Slider;

use App\Models\Slider;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $title;
    public $slug;
    public $description;
    public $image;
    public $position;

    public function updatedTitle($value)
    {
        $this->slug = slug($value);
    }

    public function deleteImage()
    {
        $this->image = null;
    }

    public function store()
    {
        $rules = [
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'image' => 'required',
        ];

        $this->validate($rules);

        // Image File Upload
        $image_name = $this->slug . '.' . $this->image->extension();
        $this->image->storeAs('images/slider', $image_name, 'public');

        $image = '/storage/images/slider/' . $image_name;

        $this->position = (Slider::max('position') ?? 0) + 1;

        Slider::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'image' => $image,
            'position' => $this->position,
        ]);

        
        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'Slider berhasil ditambah.',
        ]);
        
        return redirect()->route('administrator.sliders');
    }

    public function render()
    {
        return view('livewire.administrator.slider.create');
    }
}
