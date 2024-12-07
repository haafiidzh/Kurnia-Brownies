<?php

namespace App\Livewire\Administrator\Products\List;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductDetail;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    // Variable
    // Product
    public $name;
    public $slug;
    public $category_id;
    public $image;
    public $description;
    public $recommended = false;

    // Product Detail
    public $gallery = [];

    public function updatedName($value)
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
            'name' => 'required',
            'slug' => 'required|unique:products,slug',
            'category_id' => 'required',
            'image' => 'required|image|max:10024',
            'description' => 'required',
        ];

        $this->validate($rules);

        // Image File Upload
        $image_name = $this->slug . '.' . $this->image->extension();
        $this->image->storeAs('/images/product', $image_name, 'public');
        
        $image = 'storage/images/product/' . $image_name;

        $product = Product::create([
            'name' => $this->name,
            'slug' => $this->slug,
            'category_id' => $this->category_id,
            'image' => $image,
            'description' => $this->description,
            'recommended' => $this->recommended,
        ]);

        foreach ($this->gallery as $item) {
            $gallery_name = $this->slug . '.' . rand(1,700) . '.' . $item->extension();
            $item->storeAs('images/product/gallery', $gallery_name, 'public');

            $gallery = 'storage/images/product/gallery/' . $gallery_name;
            ProductDetail::create([
                'product_id' => $product->id,
                'value' => $gallery
            ]);
        }

        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'Product berhasil ditambah.',
        ]);
        
        return redirect()->route('administrator.products');
    }

    public function render()
    {
        $categories = ProductCategory::all();
        $product = Product::all();
        return view('livewire.administrator.products.list.create', ['categories' => $categories, 'product' => $product]);
    }
}
