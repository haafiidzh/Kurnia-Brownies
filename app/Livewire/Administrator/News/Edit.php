<?php

namespace App\Livewire\Administrator\News;

use App\Models\News;
use App\Models\NewsDetail;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class Edit extends Component
{
    use WithFileUploads;

    // Variable
    public $id;

    // News
    public $title;
    public $slug;
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
            'subject' => 'required',
            'description' => 'required',
        ];

        $this->validate($rules);

        // Image File Upload (Jika sudah ada data sebelumnya maka upload kembali gambar tersebut)
        if ($this->newImage) {
            $path = str_replace('/storage', '', $this->image);

            Storage::disk('public')->delete($path);

            $image_name = $this->slug . '.' . $this->newImage->extension();
            $this->newImage->storeAs('/images/news', $image_name, 'public');

            $image = '/storage/images/news/' . $image_name;
        } else {
            $image = $this->image;
        }

        $data->update([
            'title' => $this->title,
            'slug' => $this->slug,
            'subject' => $this->subject,
            'image' => $image,
            'description' => $this->description,
        ]);

        session()->flash('flash_message', [
            'type' => 'updated',
            'message' => 'Berita berhasil diperbarui.',
        ]);

        return redirect()->route('administrator.news');
    }

    public function render()
    {
        $data = $this->id;
        return view('livewire.administrator.news.edit', ['data' => $data]);
    }
}
