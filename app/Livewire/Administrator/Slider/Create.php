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
    public $image;
    public $position;
    public $is_active;

    public function mount()
    {
        $this->is_active = false;
    }

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
            'image' => 'required',
        ];

        $this->validate($rules);

        // Image File Upload
        $image_name = $this->slug . '.' . $this->image->extension();
        $this->image->storeAs('images/slider', $image_name, 'public');

        $image = '/storage/images/slider/' . $image_name;

        $this->position = (Slider::max('position') ?? 0) + 1;

        Slider::create([
            'title'     => $this->title,
            'slug'      => $this->slug,
            'image'     => $image,
            'position'  => $this->position,
            'is_active' => $this->is_active,
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
