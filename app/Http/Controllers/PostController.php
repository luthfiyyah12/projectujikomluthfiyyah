<?php

namespace App\Http\Controllers;

use App\Models\Post;  // Menggunakan model Post
use Illuminate\Http\Request;  // Jika Anda memerlukan Request di controller

class PostController extends Controller
{
    public function index()
    {
        // Ambil semua postingan dari database
        $posts = Post::all();

        // Debugging untuk memastikan bahwa data posts ada
        if ($posts->isEmpty()) {
            dd('Tidak ada data postingan');
        }

        // Kirim data ke view
        return view('post.index', compact('posts'));
    }

}
