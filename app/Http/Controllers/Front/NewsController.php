<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('front.pages.news.news');
    }
    /**
     * Display a listing of the resource.
     */
    public function custom($slug)
    {
        $category = Categories::where('slug', $slug)->first();

        return view('front.pages.news.custom', ['slug' => $slug, 'category' => $category]);
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        return view('front.pages.news.detail', compact('slug'));
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
