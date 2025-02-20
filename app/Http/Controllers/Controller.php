<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}

use Illuminate\Support\Facades\File;

if (File::exists(resource_path('views/post/post.blade.php'))) {
    return view('post.post');
} else {
    return abort(404, 'View not found');
}
