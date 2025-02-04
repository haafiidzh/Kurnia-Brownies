<?php

namespace App\Livewire\Administrator\News;

use App\Models\News;
use App\Models\NewsDetail;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    // Variable
    public $title;
    public $slug;
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
        $rules = [
            'title' => 'required',
            'slug' => 'required|unique:news,slug',
            'subject' => 'required',
            'image' => 'required|image|max:10024',
            'description' => 'required',
        ];

        $this->validate($rules);

        // Image File Upload
        $image_name = $this->slug . '.' . $this->image->extension();
        $this->image->storeAs('/images/news', $image_name, 'public');
        
        $image = '/storage/images/news/' . $image_name;

        News::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'subject' => $this->subject,
            'image' => $image,
            'description' => $this->description,
            'is_active' => $this->is_active,
            'published_at' => now(),
        ]);

        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'Product berhasil ditambah.',
        ]);
        
        return redirect()->route('administrator.news');
    }

    public function render()
    {
        return view('livewire.administrator.news.create');
    }
}
