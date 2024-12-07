<?php

namespace App\Livewire\Administrator\Cms\Slider;

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

    public function store()
    {
        $rules = [
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'image' => 'required',
            // 'position' => 'required',
        ];

        $this->validate($rules);

        // Image File Upload
        $image_name = $this->slug . '.' . $this->image->extension();
        $this->image->storeAs('images/slider', $image_name, 'public');

        $image = 'storage/images/slider/' . $image_name;

        // Generate Position
        $lastPosition = Slider::orderBy('position', 'desc')->first();

        if ($lastPosition) {
            $newPosition = $lastPosition->position + 1;
        } else {
            $newPosition = 1;
        }

        $this->position = $newPosition;

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
        return view('livewire.administrator.cms.slider.create');
    }
}
