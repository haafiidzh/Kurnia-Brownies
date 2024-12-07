<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('administrator.pages.news.list.index');
    }

    /**
     * Display a listing of the resource.
     */
    public function archive()
    {
        // return view('administrator.pages.news.archive.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('administrator.pages.news.list.create');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('administrator.pages.news.list.edit', compact('id'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('administrator.pages.news.list.detail', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
