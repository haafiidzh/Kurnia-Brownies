<?php

namespace App\Livewire\Administrator\Products\List;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductDetail;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class Edit extends Component
{
    use WithFileUploads;

    // Variable
    public $id;

    // Product
    public $name;
    public $slug;
    public $category_id;
    public $image;
    public $description;
    public $recommended = false;

    // Product Detail
    public $currentGallery = [];
    public $newGallery = [];

    public function mount($id)
    {
        $this->id = Product::find($id);
        $data = $this->id;
        
        $this->name = $data->name;
        $this->slug = $data->slug;
        $this->category_id = $data->category_id;
        $this->image = $data->image;
        $this->description = $data->description;
        $this->recommended = $data->recommended;
        $this->currentGallery = $data->detail;
    }

    public function updatedName($value)
    {
        $this->slug = slug($value);
    }

    public function deleteCurrentItem($id)
    {
        $item = ProductDetail::find($id);
        if($item){
            Storage::disk('public')->delete($item->value);
            $item->delete();
        }

        $this->currentGallery = ProductDetail::where('product_id', $this->id->id)->get();
    }

    public function deleteItem($index)
    {
        unset($this->newGallery[$index]);

        // Re-indexing array setelah item dihapus agar tidak ada celah
        $this->newGallery = array_values($this->newGallery);
    }

    public function update()
    {
        $data = $this->id;

        $rules = [
            'name' => 'required',
            'slug' => 'required|unique:products,slug,' . $data->id,
            'category_id' => 'required',
            'description' => 'required',
        ];

        $this->validate($rules);

        // Image File Upload (Jika sudah ada data sebelumnya maka upload kembali gambar tersebut)
        if ($this->image instanceof TemporaryUploadedFile) {
            $image_name = $this->slug . '.' . $this->image->extension();
            $this->image->storeAs('/images/product', $image_name, 'public');
        
            $image = 'storage/images/product/' . $image_name;
        } else {
            $image = $data->image; // Menggunakan gambar yang sudah ada
        }

        $data->update([
            'name' => $this->name,
            'slug' => $this->slug,
            'category_id' => $this->category_id,
            'image' => $image,
            'description' => $this->description,
            'recommended' => $this->recommended,
        ]);

        foreach ($this->newGallery as $item) {
            $gallery_name = $this->slug . '.' . rand(1,700) . '.' . $item->extension();
            $item->storeAs('images/product/gallery', $gallery_name, 'public');

            $gallery = 'storage/images/product/gallery/' . $gallery_name;
            ProductDetail::updateOrCreate([
                'product_id' => $data->id,
                'value' => $gallery
            ]);
        }

        session()->flash('flash_message', [
            'type' => 'updated',
            'message' => 'Product berhasil diperbarui.',
        ]);
        
        return redirect()->route('administrator.products');
    }

    public function render()
    {
        $categories = ProductCategory::all();
        $data = $this->id;
        return view('livewire.administrator.products.list.edit', ['categories' => $categories, 'data' => $data]);
    }
}
