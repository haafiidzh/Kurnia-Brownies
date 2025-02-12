<?php

namespace App\Livewire\Administrator\Dashboard;

use App\Models\Categories;
use App\Models\Faq;
use App\Models\Feedback;
use App\Models\News;
use App\Models\Product;
use App\Models\Slider;
use App\Models\User;
use App\Models\Visitor;
use App\Models\VisitorSummaries;
use Carbon\Carbon;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Overview extends Component
{
    public function setReview($id)
    {
        $data = Feedback::find($id);

        $data->update([
            'status' => 'reviewed'
        ]);
    }

    public function render()
    {
        $feedback = Feedback::where('status', 'pending')->get();

        $product_custom = Product::all();
        $sliders = Slider::where('is_active',true)->orderBy('likes', 'desc')->get();
        $faqs = Faq::count();
        $product = Product::count();
        $news = News::where('is_active', true)->where('views', '>', 0)->orderBy('views','desc')->get();
        $product_category = Categories::where('group', 'product')->withCount('product')->orderBy('product_count', 'desc')->get();

        return view('livewire.administrator.dashboard.overview', [
            'feedback' => $feedback,
            'faqs' => $faqs,
            'sliders' => $sliders,
            'product_custom' => $product_custom,
            'product' => $product,
            'news' => $news,
            'product_category' => $product_category,
        ]);
    }
}
