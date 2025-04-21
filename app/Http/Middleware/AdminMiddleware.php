<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Pastikan admin login atau user memiliki akses admin
        if (!auth()->user() || auth()->user()->role !== 'admin') {
            return redirect('/');  // atau halaman lain yang diinginkan jika bukan admin
        }

        return $next($request);
    }
}
