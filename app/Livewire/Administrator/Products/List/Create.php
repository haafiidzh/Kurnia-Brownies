<?php

namespace App\Livewire\Administrator\Products\List;

use App\Models\Categories;
use App\Models\Product;
use App\Models\ProductDetail;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    // Variable
    // Product
    public $name;
    public $slug;
    public $keywords;
    public $category_id;
    public $image;
    public $short_description;
    public $description;
    public $best_seller;

    // Product Detail
    public $gallery = [];

    public function mount()
    {
        $this->best_seller = false;
    }

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
            'keywords' => 'required',
            'category_id' => 'required',
            'image' => 'required|image|max:10024',
            'short_description' => 'required',
            'description' => 'required',
        ];

        $this->validate($rules);

        // Image File Upload
        $image_name = $this->slug . '.' . $this->image->extension();
        $this->image->storeAs('/images/product', $image_name, 'public');
        
        $image = '/storage/images/product/' . $image_name;

        $product = Product::create([
            'name' => $this->name,
            'slug' => $this->slug,
            'keywords' => $this->keywords,
            'category_id' => $this->category_id,
            'image' => $image,
            'short_description' => $this->short_description,
            'description' => $this->description,
            'best_seller' => $this->best_seller,
        ]);

        foreach ($this->gallery as $item) {
            $gallery_name = $this->slug . '.' . rand(1,700) . '.' . $item->extension();
            $item->storeAs('images/product/gallery', $gallery_name, 'public');

            $gallery = '/storage/images/product/gallery/' . $gallery_name;
            ProductDetail::create([
                'product_id' => $product->id,
                'value' => $gallery
            ]);
        }

        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'Berhasil menambah produk baru.',
        ]);
        
        return redirect()->route('administrator.products');
    }

    public function render()
    {
        $categories = Categories::where('group','product')->get();
        return view('livewire.administrator.products.list.create', ['categories' => $categories]);
    }
}
