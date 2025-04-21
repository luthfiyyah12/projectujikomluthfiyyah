<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    public function follow($id)
    {
        $user = Auth::user();
        $author = User::findOrFail($id);

        if ($user->following()->where('author_id', $id)->exists()) {
            $user->following()->detach($id); // Unfollow
        } else {
            $user->following()->attach($id); // Follow
        }

        return back(); // kembali ke halaman sebelumnya
    }

}
