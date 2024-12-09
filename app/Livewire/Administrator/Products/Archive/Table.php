<?php

namespace App\Livewire\Administrator\Products\Archive;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public $search;

    public function mount()
    {
        $this->search = '';
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function restore($id) // Arsip
    {
        $product = Product::withTrashed()->find($id);
        if ($product) {
            $product->restore();
            session()->flash('flash_message', [
                'type' => 'created',
                'message' => 'Produk berhasil dipulihkan.',
            ]);
            return redirect()->route('administrator.products.archive');
        } else {
            return session()->flash('flash_message', [
                'type' => 'error',
                'message' => 'Produk tidak ditemukan.',
            ]);
        }
    }
    
    public function delete($id)
    {
        $product = Product::withTrashed()->find($id);
        if ($product) {
            $product->forceDelete();
            session()->flash('flash_message', [
                'type' => 'deleted',
                'message' => 'Produk berhasil dihapus permanen.',
            ]);
            return redirect()->route('administrator.products.archive');
        } else {
            return session()->flash('flash_message', [
                'type' => 'error',
                'message' => 'Produk tidak ditemukan.',
            ]);
        }
    }

    public function render()
    {
        $products = Product::onlyTrashed()->when($this->search, function ($query) {
            $query->where('deleted_at', '!=', null)
            ->where(function($q) {
                $q->where('name', 'like', '%' . $this->search . '%');
            });
        })->paginate(5);

        return view('livewire.administrator.products.archive.table', ['products' => $products]);
    }
}
