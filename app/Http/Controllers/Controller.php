<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

use Illuminate\Support\Facades\File;

if (File::exists(resource_path('views/post/post.blade.php'))) {
    return view('post.post');
} else {
    return abort(404, 'View not found');
}
