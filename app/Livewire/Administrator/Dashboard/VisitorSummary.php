<?php

namespace App\Livewire\Administrator\Dashboard;

use App\Models\Visitor;
use App\Models\VisitorSummaries;
use Carbon\Carbon;
use Livewire\Component;

class VisitorSummary extends Component
{
    public $selectedYear;
    public $years;

    public $data;
    public $month = [];

    public function setMonth()
    {
        if ($this->data->count() <= 10){
            $this->month = [
                1 => 'Januari', 
                2 => 'Februari', 
                3 => 'Maret', 
                4 => 'April',
                5 => 'Mei', 
                6 => 'Juni', 
                7 => 'Juli', 
                8 => 'Agustus',
                9 => 'September', 
                10 => 'Oktober', 
                11 => 'November', 
                12 => 'Desember'
            ];
        } else {
            $this->month = [
                1 => 'Jan', 
                2 => 'Feb', 
                3 => 'Mar', 
                4 => 'Apr',
                5 => 'Mei', 
                6 => 'Jun', 
                7 => 'Jul', 
                8 => 'Ags',
                9 => 'Sept', 
                10 => 'Okt', 
                11 => 'Nov', 
                12 => 'Des'
            ];
        }
        return $this->month;
    }

    public function mount()
    {
        $this->years = VisitorSummaries::select('year')->distinct()->orderBy('year', 'desc')->get();
        $this->selectedYear = Carbon::now()->year;

        $this->data = VisitorSummaries::where('year', $this->selectedYear)
            ->orderBy('month')
            ->get(['month', 'total_visitor']);

        $this->setMonth();
    }

    public function setYear($year)
    {
        $this->selectedYear = $year;
        
        $this->data = VisitorSummaries::where('year', $this->selectedYear)
            ->orderBy('month')
            ->get(['month', 'total_visitor']);

        $categories = [];
        $visitorArray = [];

        foreach ($this->data as $data) {
            $categories[] = $this->month[$data->month];
            $visitorArray[] = $data->total_visitor;
        }
        $this->dispatch('updateChart', json_encode($categories), json_encode($visitorArray));
    }

    public function render()
    {
        $thisYear = Carbon::now()->year;
        
        $daily = Visitor::whereDate('created_at', Carbon::now())->count();
        $monthly = Visitor::whereMonth('created_at', Carbon::now()->month)->count();
        $visitoryearly = Visitor::whereYear('created_at', $thisYear)->count();
        $visitorsummarythisyear = (int) VisitorSummaries::where('year', $thisYear)->sum('total_visitor');
        $yearly = $visitoryearly + $visitorsummarythisyear;
        
        $categories = [];
        $visitorArray = [];

        foreach ($this->data as $data) {
            $categories[] = $this->month[$data->month];
            $visitorArray[] = $data->total_visitor;
        }

        return view('livewire.administrator.dashboard.visitor-summary', [
            'daily' => $daily,
            'monthly' => $monthly,
            'yearly' => $yearly,
            'categories' => json_encode($categories),
            'visitorArray' => json_encode($visitorArray),
        ]);
    }
}