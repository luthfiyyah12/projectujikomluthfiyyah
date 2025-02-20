<?php

// app/Http/Controllers/AdminController.php
namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function images()
    {
        $images = Image::all();
        return view('admin.images.index', compact('images'));
    }

    public function create()
    {
        return view('admin.images.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Image::create([
            'title' => $request->title,
            'image_name' => $imagePath,
        ]);

        return redirect()->route('admin.images')->with('success', 'Image uploaded successfully.');
    }
}

