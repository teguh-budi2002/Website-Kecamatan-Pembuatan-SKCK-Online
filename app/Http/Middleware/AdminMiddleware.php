<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            Alert::warning('PERHATIAN', "Silahkan Login Terlebih Dahulu Untuk Mengakses Halaman Web");
            return redirect('login');
        }

        if (isset(Auth::user()->isAdmin) && Auth::user()->isAdmin === 1) {
            return $next($request);
        }
        Alert::error('DILARANG MASUK', "Handa Admin Yang Boleh Mengakses Dashboard!");
        return redirect('/');
    }
}
