<?php

namespace App\Livewire\Front\Products;

use App\Models\Categories;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class All extends Component
{
    use WithPagination;

    public $categories;
    public $selectedCategory;
    public $search;

    protected array $queryString = [
        // 'search',
        // 'selectedCategory'
        'selectedCategory' => ['except' => ''], // Kosongkan query jika tidak ada kategori
        'search' => ['except' => ''],   // Kosongkan query jika tidak ada pencarian
        // 'page' => ['except' => 1],
    ];

    protected $listeners = [
        'search',
        'selectedCategory'
    ];

    public function mount()
    {
        $this->categories = Categories::where('group', 'product')->orderBy('name', 'asc')->get();
    }

    public function updatedSelectedCategory()
    {
        $this->resetPage();
    }

    public function searchProduct()
    {
        $this->resetPage();
    }

    public function resetSearch()
    {
        $this->search = "";
        $this->resetPage();
    }

    public function render()
    {
        $query = Product::query()->orderBy('name', 'asc');

        // Filter kategori
        if ($this->selectedCategory) {
            if ($this->selectedCategory === 'recommended') {
                $query->where('recommended', true);
            } else {
                $query->whereHas('category', function ($q) {
                    $q->where('slug', $this->selectedCategory);
                });
            }
        }

        // Scope Search
        if ($this->search) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        $datas = $query->paginate(9);

        return view('livewire.front.products.all', [
            'datas' => $datas,
            'categories' => $this->categories,
        ]);
    }
}
