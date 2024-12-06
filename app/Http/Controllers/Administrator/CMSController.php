<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CMSController extends Controller
{
    public function edit($cmsId)
    {
        return view('administrator.pages.cms.content.edit', compact('cmsId'));
    }

    public function index()
    {
        return view('administrator.pages.cms.content.index');
    }
}
