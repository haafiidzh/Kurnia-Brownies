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
        // Cek apakah URL mengandung prefix /administrator atau /administrator/*
        

        $ip = $request->ip();
        $userAgent = $request->userAgent();
        $referer = $request->headers->get('referer');

        // Cek apakah IP sudah tercatat hari ini
        $existingVisitor = Visitor::where('ip_address', $ip)
            ->whereDate('created_at', now()->toDateString())
            ->first();

        if (!$existingVisitor) {
            if ($request->is('administrator') || $request->is('administrator/*')) {
                return;
                // dd($request);
            } else {
            Visitor::create([
                'id' => Str::uuid(),
                'ip_address' => $ip,
                'user_agent' => $userAgent,
                'referer' => $referer ?? 'Direct Access',
            ]);
            }
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
