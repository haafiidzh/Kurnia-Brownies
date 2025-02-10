<?php

namespace App\Livewire\Administrator\Products\List;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class Table extends Component
{
    use WithPagination;

    public $search;

    public array $queryString = [
        'search',
    ];

    public function mount()
    {
        $this->search;
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function archive($id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->deleted_at = now();
            $product->save();
            session()->flash('flash_message', [
                'type' => 'created',
                'message' => 'Berhasil mengarsipkan produk.',
            ]);
            return redirect()->route('administrator.products');
        } else {
            return session()->flash('flash_message', [
                'type' => 'deleted',
                'message' => 'Produk tidak ditemukan.',
            ]);
        }
    }

    public function delete($id)
    {
        $product = Product::find($id);
        if ($product) {

            $image = substr($product->image, strlen('storage/'));

            // Hapus image galeri
            Storage::disk('public')->delete($image);
    
            // Mapping gallery
            $galleryPath = 'images/product/gallery/';
            $galleryFiles = Storage::disk('public')->files($galleryPath);
    
            // Filter file berdasarkan slug product dan Hapus Item 
            foreach ($galleryFiles as $file) {
                if (str_contains($file, $product->slug)) {
                    Storage::disk('public')->delete($file);
                }
            }

            $product->forceDelete();

            session()->flash('flash_message', [
                'type' => 'created',
                'message' => 'Berhasil menghapus produk.',
            ]);
            return redirect()->route('administrator.products');
        } else {
            session()->flash('flash_message', [
                'type' => 'error',
                'message' => 'Product tidak ditemukan.',
            ]);
            return redirect()->route('administrator.products');
        } 
    }

    public function togglePublished($id)
    {
        $product = Product::find($id);

        if ($product) {
            $product->best_seller = !$product->best_seller;
            $product->save();

            session()->flash('flash_message', [
                'type' => 'created',
                'message' => 'Berhasil mengubah status produk.',
            ]);

            return redirect()->route('administrator.products');
        }
    }
    
    public function render()
    {
        $products = Product::when($this->search, function ($query) {
            $query->where('name', 'like', '%' . $this->search . '%');
        })
        ->orderBy('created_at','desc')
        ->paginate(8);

        return view('livewire.administrator.products.list.table', ['products' => $products]);
    }

}
