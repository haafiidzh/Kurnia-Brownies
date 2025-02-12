<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Visitor;
use App\Models\VisitorSummaries;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ArchiveVisitor extends Command
{
    protected $signature = 'visitors:archive';
    protected $description = 'Rekap data visitors per bulan dan hapus data lama';

    public function handle()
    {
        $lastMonth = Carbon::now()->subMonth(); // Bulan sebelumnya
        $month = $lastMonth->month;
        $year = $lastMonth->year;

        
        $totalVisitors = Visitor::whereMonth('created_at', $month)
            ->whereYear('created_at', $year)
            ->count();

        VisitorSummaries::create([
            'month' => $month,
            'year' => $year,
            'total_visitor' => $totalVisitors
        ]);

        DB::table('visitors')->whereMonth('created_at', $month)->delete();

        $this->info("Data pengunjung bulan $month-$year telah diarsipkan.");
    }
}
