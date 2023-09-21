<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
{
    if (Auth::check()) {
        $user = Auth::user();

        // Memeriksa apakah pengguna memiliki peran yang diizinkan (misalnya, role_id bukan 3)
        if ($user->role_id != 3) {
            // Jika peran pengguna diizinkan, lanjutkan permintaan ke controller
            return $next($request);
        } else {
            // Jika peran pengguna adalah 3 (peran yang tidak diizinkan)
            // Berikan pesan atau tindakan sesuai kebutuhan Anda
            return redirect()->route('home')->with('error', 'Anda tidak memiliki izin untuk mengakses dashboard.');
        }
    }

    // Jika pengguna belum login, redirect ke halaman login
    return redirect()->route('login');
}

}
