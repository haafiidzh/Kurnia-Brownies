<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppSettingController extends Controller
{
    public function edit($cmsId)
    {
        return view('administrator.pages.setting.content.edit', compact('cmsId'));
    }

    public function index()
    {
        return view('administrator.pages.setting.content.index');
    }
}
