<?php

namespace App\Livewire\Front\Home;

use App\Models\Slider as ModelsSlider;
use Livewire\Component;

class Slider extends Component
{
    public $likedSliders = [];

    public function mount()
    {
        // Ambil slider yang sudah dilike dari session
        $this->likedSliders = session('liked_sliders', []);
    }

    public function toggleLike($id)
    {
        $slider = ModelsSlider::findOrFail($id);

        if (in_array($id, $this->likedSliders)) {
            $slider->unlike();
            $this->likedSliders = array_diff($this->likedSliders, [$id]);
        } else {
            $slider->like();
            $this->likedSliders[] = $id;
        }

        // Simpan likedSliders ke session
        session(['liked_sliders' => $this->likedSliders]);
        // return redirect()->route('home');
        $this->dispatch('likeUpdated', $id, $slider->likes);
    }

    public function render()
    {
        $datas = ModelsSlider::orderBy('position', 'asc')->get();
        return view('livewire.front.home.slider', ['datas' => $datas]);
    }
}
