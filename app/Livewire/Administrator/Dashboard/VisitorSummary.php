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
        
        $categories = [];
        $visitorArray = [];

        foreach ($this->data as $data) {
            $categories[] = $this->month[$data->month];
            $visitorArray[] = $data->total_visitor;
        }
        $this->dispatch('updateChart', json_encode($categories), json_encode($visitorArray));
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

        // Daily variable
        $today = Carbon::today();
        $yesterday = Carbon::yesterday();

        // Monthly variable
        $thisMonth = Carbon::now()->month;
        $lastMonth = $thisMonth - 1;
    
        // Daily Count
        $daily = Visitor::whereDate('created_at', $today)->count();
        $yesterdayCount = Visitor::whereDate('created_at', $yesterday)->count();
        $dailyChange = $yesterdayCount > 0
        ? (($daily - $yesterdayCount) / $yesterdayCount) * 100
        : ($daily > 0 ? 100 : 0);

        // Monthly Count
        $monthly = Visitor::whereMonth('created_at', Carbon::now()->month)->count();
        $lastMonthCount = VisitorSummaries::where('month', $lastMonth)->where('year', $thisYear)->value('total_visitor') ?? 0;
        $monthlyChange = $lastMonthCount > 0
        ? (($monthly - $lastMonthCount) / $lastMonthCount) * 100
        : ($monthly > 0 ? 100 : 0);

        // Yearly Count
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
            'dailyChange' => number_format($dailyChange, 2, ',', '.'),
            'monthlyChange' => number_format($monthlyChange, 2, ',', '.'),
        ]);
    }
}