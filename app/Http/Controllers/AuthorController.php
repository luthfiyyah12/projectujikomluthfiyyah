<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function show()
    {
        $user = auth()->user(); // atau User::find(id)
        return view('author', compact('user'));

        $user = User::findOrFail($id);
        return view('author.show', compact('user'));

        $user->followers()->count();
        $user->following()->count();

        $author = Author::with(['followers', 'following'])->findOrFail($id);

        return response()->json([
            'author' => $author,
            'followers_count' => $author->followers->count(),
            'following_count' => $author->following->count(),
        ]);
    }

    public function index()
    {
        return view('author');
    }

}

