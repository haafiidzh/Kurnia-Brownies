<?php

namespace App\Livewire\Administrator\News;

use App\Models\News;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Laravel\Facades\Image;
use Intervention\Image\Drivers\Gd\Encoders\WebpEncoder;

class Edit extends Component
{
    use WithFileUploads;

    // Variable
    public $id;

    // News
    public $title;
    public $slug;
    public $keywords;
    public $subject;
    public $image;
    public $newImage;
    public $description;
    public $published_at;
    public $is_active;

    public function mount($id)
    {
        $this->id = News::find($id);
        $data = $this->id;

        $this->title = $data->title;
        $this->slug = $data->slug;
        $this->keywords = $data->keywords;
        $this->subject = $data->subject;
        $this->image = $data->image;
        $this->description = $data->description;
    }

    public function updatedTitle($value)
    {
        $this->slug = slug($value);
    }

    public function update()
    {
        $data = $this->id;

        $rules = [
            'title' => 'required',
            'slug' => 'required|unique:news,slug,' . $data->id,
            'keywords' => 'required',
            'subject' => 'required',
            'description' => 'required',
        ];

        $this->validate($rules);

        // Image File Upload (Jika sudah ada data sebelumnya maka upload kembali gambar tersebut)
        if ($this->newImage) {
            $path = str_replace('/storage', '', $this->image);

            Storage::disk('public')->delete($path);

            $imageName =  $this->slug . '.webp';

            $convertedImage = Image::read($this->newImage->getRealPath())
            ->cover(1600, 900, 'center')
            ->encode(new WebpEncoder(100));

            Storage::disk('public')->put('images/news/' . $imageName, $convertedImage);
            $image = '/storage/images/news/' . $imageName;
        } else {
            $image = $this->image;
        }

        $data->update([
            'title' => $this->title,
            'slug' => $this->slug,
            'keywords' => $this->keywords,
            'subject' => $this->subject,
            'image' => $image,
            'description' => $this->description,
        ]);

        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'Berhasil memperbarui informasi berita.',
        ]);

        return redirect()->route('administrator.news');
    }

    public function render()
    {
        $data = $this->id;
        return view('livewire.administrator.news.edit', ['data' => $data]);
    }
}
