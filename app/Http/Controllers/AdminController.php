<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function images()
    {
        return view('admin.images.index');
    }

    public function create()
    {
        return view('admin.images.create');
    }

    public function store(Request $request)
    {
        // Proses upload/store image
    }
}
