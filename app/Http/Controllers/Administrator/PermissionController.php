<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    
    public function create()
    {
        return view('administrator.pages.permissions.create');
    }

    public function index()
    {
        return view('administrator.pages.permissions.index');
    }
}
