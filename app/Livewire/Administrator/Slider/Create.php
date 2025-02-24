<?php

namespace App\Livewire\Administrator\Slider;

use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Laravel\Facades\Image;
use Intervention\Image\Drivers\Gd\Encoders\WebpEncoder;

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

        $imageName =  $this->slug . '.webp';

        $convertedImage = Image::read($this->image->getRealPath())
        ->cover(1500, 1500, 'center')
        ->encode(new WebpEncoder(100));

        Storage::disk('public')->put('images/slider/' . $imageName, $convertedImage);

        $image = '/storage/images/slider/' . $imageName;

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
