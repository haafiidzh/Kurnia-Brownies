<?php

namespace App\Livewire\Administrator\News;

use App\Models\News;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Laravel\Facades\Image;
use Intervention\Image\Drivers\Gd\Encoders\WebpEncoder;

class Create extends Component
{
    use WithFileUploads;

    // Variable
    public $title;
    public $slug;
    public $keywords;
    public $subject;
    public $image;
    public $description;
    public $published_at;
    public $is_active = true;


    public function updatedTitle($value)
    {
        $this->slug = slug($value);
    }

    public function store()
    {
        $user = auth()->user()->id;

        $rules = [
            'title' => 'required',
            'slug' => 'required|unique:news,slug',
            'keywords' => 'required',
            'subject' => 'required',
            'image' => 'required|image|max:10024',
            'description' => 'required',
        ];

        $this->validate($rules);

        $imageName =  $this->slug . '.webp';

        $convertedImage = Image::read($this->image->getRealPath())
        ->cover(1600, 900, 'center')
        ->encode(new WebpEncoder(100));

        Storage::disk('public')->put('images/news/' . $imageName, $convertedImage);

        $image = '/storage/images/news/' . $imageName;

        News::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'keywords' => $this->keywords,
            'subject' => $this->subject,
            'image' => $image,
            'description' => $this->description,
            'is_active' => $this->is_active,
            'created_by' => $user,
            'published_at' => now(),
        ]);

        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'Berhasil menambah Berita baru.',
        ]);
        
        return redirect()->route('administrator.news');
    }

    public function render()
    {
        return view('livewire.administrator.news.create');
    }
}
