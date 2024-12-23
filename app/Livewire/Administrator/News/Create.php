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
    // News
    public $title;
    public $slug;
    public $subject;
    public $image;
    public $description;
    public $published_at;
    public $is_active = true;

    // News Detail
    public $gallery = [];

    public function updatedTitle($value)
    {
        $this->slug = slug($value);
    }

    public function deleteItem($index)
    {
        // array_splice($this->gallery, $index);
        unset($this->gallery[$index]);

        // Re-indexing array setelah item dihapus agar tidak ada celah
        $this->gallery = array_values($this->gallery);
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

        $news = News::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'subject' => $this->subject,
            'image' => $image,
            'description' => $this->description,
            'is_active' => $this->is_active,
            'published_at' => now(),
        ]);

        foreach ($this->gallery as $item) {
            $gallery_name = $this->slug . '.' . rand(1,999999) . '.' . $item->extension();
            $item->storeAs('images/news/gallery', $gallery_name, 'public');

            $gallery = '/storage/images/news/gallery/' . $gallery_name;
            NewsDetail::create([
                'product_id' => $news->id,
                'value' => $gallery
            ]);
        }

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
