<?php

namespace App\Http\Controllers;

use App\Models\Post;  // Menggunakan model Post
use Illuminate\Http\Request;  // Jika Anda memerlukan Request di controller

class PostController extends Controller
{
    // In your PostController

    public function index()
    {
        $posts = Post::all();  // Mengambil semua data post

        if ($posts->isEmpty()) {
            // Jika tidak ada post, log pesan
            \Log::info('Tidak ada post.');
        }

        return view('post.index', compact('posts'));  // Mengirimkan $posts ke view
    }


    public function showPosts()
    {
        $posts = Post::all();  // Mengambil semua post
        return view('post', compact('posts'));  // Kirim ke view
    }

}
