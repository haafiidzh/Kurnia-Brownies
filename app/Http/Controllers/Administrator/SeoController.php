<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function edit($cmsId)
    {
        return view('administrator.pages.setting.seo.edit', compact('cmsId'));
    }

    public function index()
    {
        return view('administrator.pages.setting.seo.index');
    }
}
