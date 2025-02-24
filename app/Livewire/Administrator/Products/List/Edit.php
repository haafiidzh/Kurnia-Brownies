<?php

namespace App\Livewire\Administrator\Products\List;

use App\Models\Categories;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    // Variable
    public $id;

    // Product
    public $name;
    public $slug;
    public $keywords;
    public $category_id;
    public $image;
    public $newImage;
    public $description;
    public $short_description;
    public $best_seller = false;

    // Product Detail
    public $currentGallery = [];
    public $deletedGallery = [];
    public $newGallery = [];

    public function mount($id)
    {
        $this->id = Product::find($id);
        $data = $this->id;
        
        $this->name = $data->name;
        $this->slug = $data->slug;
        $this->keywords = $data->keywords;
        $this->category_id = $data->category_id;
        $this->image = $data->image;
        $this->description = $data->description;
        $this->short_description = $data->short_description;
        $this->best_seller = $data->best_seller;
        $this->currentGallery = $data->detail;
    }

    public function updatedName($value)
    {
        $this->slug = slug($value);
    }

    public function deleteOldItem($id)
    {
        $this->deletedGallery[] = $id;
    }

    public function restoreOldItem($id)
    {
        //
    }

    public function deleteNewItem($index)
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
            'keywords' => 'required',
            'category_id' => 'required',
            'short_description' => 'required',
            'description' => 'required',
        ];

        $this->validate($rules);

        if ($this->deletedGallery) {
            foreach ($this->deletedGallery as $deleted) {
                $item = ProductDetail::find($deleted);

                $path = str_replace('/storage','',$item->value);

                Storage::disk('public')->delete($path);
                $item->delete();
            }
        }

        // Image File Upload (Jika sudah ada data sebelumnya maka upload kembali gambar tersebut)
        if ($this->newImage) {
            $path = str_replace('/storage','',$this->image);

            Storage::disk('public')->delete($path);

            $image_name = $this->slug . '.' . $this->newImage->extension();
            $this->newImage->storeAs('/images/product', $image_name, 'public');
        
            $image = '/storage/images/product/' . $image_name;
        } else {
            $image = $this->image; 
        }

        $data->update([
            'name' => $this->name,
            'slug' => $this->slug,
            'keywords' => $this->keywords,
            'category_id' => $this->category_id,
            'image' => $image,
            'short_description' => $this->short_description,
            'description' => $this->description,
            'best_seller' => $this->best_seller,
        ]);

        foreach ($this->newGallery as $item) {
            $gallery_name = $this->slug . '.' . rand(1,999999) . '.' . $item->extension();
            $item->storeAs('images/product/gallery', $gallery_name, 'public');

            $gallery = '/storage/images/product/gallery/' . $gallery_name;
            ProductDetail::updateOrCreate([
                'product_id' => $data->id,
                'value' => $gallery
            ]);
        }

        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'Berhasil memperbarui informasi produk.',
        ]);
        
        return redirect()->route('administrator.products');
    }

    public function render()
    {
        $categories = Categories::where('group','product')->get();
        $data = $this->id;
        return view('livewire.administrator.products.list.edit', ['categories' => $categories, 'data' => $data]);
    }
}
