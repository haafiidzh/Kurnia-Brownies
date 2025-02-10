<?php

namespace App\Livewire\Front\Home;

use App\Models\Slider as ModelsSlider;
use Livewire\Component;
use Livewire\Attributes\On;

class Slider extends Component
{
    public $likedSliders = [];

    public function mount()
    {
        $this->likedSliders = session('liked_sliders', []);
    }

    #[On('toggleLike')]
    public function toggleLike($id)
    {
        // dd($id);
        $slider = ModelsSlider::findOrFail($id);

        if (in_array($id, $this->likedSliders)) {
            $slider->unlike();
            $this->likedSliders = array_diff($this->likedSliders, [$id]);
        } else {
            $slider->like();
            $this->likedSliders[] = $id;
        }

        session(['liked_sliders' => $this->likedSliders]);
        
        // Dispatch event untuk update UI
        $this->dispatch('likeUpdated', $id, $slider->likes);
    }

    public function render()
    {
        $datas = ModelsSlider::where('is_active', true)
        ->orderBy('position', 'asc')
        ->get();
        return view('livewire.front.home.slider', ['datas' => $datas]);
    }
}
