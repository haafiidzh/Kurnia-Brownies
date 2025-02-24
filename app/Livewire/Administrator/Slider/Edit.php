<?php

namespace App\Livewire\Administrator\Slider;

use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Laravel\Facades\Image;
use Intervention\Image\Drivers\Gd\Encoders\WebpEncoder;

class Edit extends Component
{
    use WithFileUploads;

    // Variabel
    public $slider;

    public $title;
    public $slug;
    public $is_active;
    public $image;
    public $newImage;

    public function mount($id)
    {
        $slider = Slider::find($id);

        $this->slider = $slider;
        $this->title = $slider->title;
        $this->slug = $slider->slug;
        $this->is_active = $slider->is_active;
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
            'image' => 'required',
        ];

        $this->validate($rules);

        if ($this->newImage) {
            $path = str_replace('/storage','',$this->image);

            Storage::disk('public')->delete($path);

            $imageName =  $this->slug . '.webp';

            $convertedImage = Image::read($this->newImage->getRealPath())
            ->cover(1500, 1500, 'center')
            ->encode(new WebpEncoder(100));

            Storage::disk('public')->put('images/slider/' . $imageName, $convertedImage);
            $image = '/storage/images/slider/' . $imageName;
        } else {
            $image = $this->image;
        }

        $data->update(
            [
                'title' => $this->title,
                'slug' => $this->slug,
                'is_active' => $this->is_active,
                'image' => $image
            ]
        );

        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'Berhasil memperbarui informasi slider.',
        ]);

        return redirect()->route('administrator.sliders');
    }

    public function render()
    {
        return view('livewire.administrator.slider.edit');
    }
}
