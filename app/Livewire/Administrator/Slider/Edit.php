<?php

namespace App\Livewire\Administrator\Slider;

use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    // Variabel
    public $slider;

    public $title;
    public $slug;
    public $description;
    public $image;
    public $newImage;

    public function mount($id)
    {
        $slider = Slider::find($id);

        $this->slider = $slider;
        $this->title = $slider->title;
        $this->slug = $slider->slug;
        $this->description = $slider->description;
        $this->image = $slider->image;
    }

    public function updatedTitle($value)
    {
        $this->slug = slug($value);
    }

    public function update()
    {
        $data = $this->slider;

        $rules = [
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'image' => 'required',
        ];

        $this->validate($rules);

        if ($this->newImage) {
            $path = str_replace('/storage','',$this->image);

            Storage::disk('public')->delete($path);

            $image_name = $this->slug . '.' . $this->newImage->extension();
            $this->newImage->storeAs('images/slider', $image_name, 'public');

            $image = '/storage/images/slider/' . $image_name;
        } else {
            $image = $this->image;
        }

        $data->update(
            [
                'title' => $this->title,
                'slug' => $this->slug,
                'description' => $this->description,
                'image' => $image
            ]
        );

        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'Data berhasil diperbarui.',
        ]);

        return redirect()->route('administrator.sliders');
    }

    public function render()
    {
        return view('livewire.administrator.slider.edit');
    }
}
