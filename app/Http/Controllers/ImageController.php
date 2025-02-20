<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image; // Import Image model di sini

class ImageController extends Controller
{
    public function index()
    {
        // Ambil semua gambar dari database dan kirim ke view
        $images = Image::all();
        return view('home', compact('images'));
    }

    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Menyimpan file gambar dengan nama unik menggunakan timestamp
        $imageName = time().'.'.$request->image->extension();

        // Pindahkan file ke folder uploads
        $request->image->move(public_path('uploads'), $imageName);

        // Simpan data gambar ke database
        Image::create([
            'title' => $request->title,
            'image_path' => 'uploads/' . $imageName
        ]);

        // Redirect kembali dengan pesan sukses
        return back()->with('success', 'Image uploaded successfully.');
    }
}
