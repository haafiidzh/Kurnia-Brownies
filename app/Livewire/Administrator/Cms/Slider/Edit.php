<?php

namespace App\Livewire\Administrator\Cms\Slider;

use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
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

    public function mount($id)
    {
        $this->slider = Slider::find($id);;
        $slider = $this->slider;

        $this->title = $slider->title;
        $this->slug = $slider->slug;
        $this->description = $slider->description;
        $this->image = $slider->image;
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

        $files = $data->image;
        if ($files) {
            Storage::disk('public')->delete($files);
        }

        if ($this->image instanceof TemporaryUploadedFile) {
            $files = $data->image;
            if ($files) {
                Storage::disk('public')->delete($files);
            }
            
            $imageName = $this->slug . '.' . $this->image->extension();
            $imagePath = $this->image->storeAs('images', $imageName, 'public');
        } else {
            $imagePath = $data->image; // Menggunakan gambar yang sudah ada
        }
        $data->update(
            [
                'title' => $this->title,
                'slug' => $this->slug,
                'description' => $this->description,
                'image' => $imagePath
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
        $data = $this->slider;
        // dd($data);
        return view('livewire.administrator.cms.slider.edit', ['data' => $data]);
    }
}
