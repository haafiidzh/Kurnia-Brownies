<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() 
    {
        return view('administrator.pages.users.index');
    }

    public function create() 
    {
        return view('administrator.pages.users.create');
    }

    public function show($id_pengguna)
    {
        return view('administrator.pages.users.detail',compact('id_pengguna'));
    }

    public function edit($id_pengguna)
    {
        return view('administrator.pages.users.edit',compact('id_pengguna'));
    }
}
