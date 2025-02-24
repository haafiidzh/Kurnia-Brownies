<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function track(Request $request)
    {
        $ip = $request->ip();
        $userAgent = $request->userAgent();
        $referer = $request->headers->get('referer');
        $url = $request->fullUrl(); 

        $currentDateTime = now();

        if ($request->is('administrator/*') || ($url && str_contains($url, 'administrator'))|| ($referer && str_contains($referer, 'administrator'))) {
            return;
        }
    
        // Cek apakah IP sudah tercatat di menit yang sama
        $existingVisitor = Visitor::where('ip_address', $ip)
            ->whereYear('created_at', $currentDateTime->year)
            ->whereMonth('created_at', $currentDateTime->month)
            ->whereDay('created_at', $currentDateTime->day)
            ->whereRaw('HOUR(created_at) = ?', [$currentDateTime->hour])
            ->whereRaw('MINUTE(created_at) = ?', [$currentDateTime->minute])
            ->first();
        
        if (!$existingVisitor) {
            Visitor::create([
                'id' => Str::uuid(),
                'ip_address' => $ip,
                'user_agent' => $userAgent,
                'referer' => $referer ?? 'Direct Access',
                'url' => $url,
            ]);
        }
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
