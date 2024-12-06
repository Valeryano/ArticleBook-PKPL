<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Misalkan kita menggunakan kolom 'role' di tabel users
        if (Auth::check() && Auth::user()->role === $role) {
            return $next($request);
        }

        // Jika tidak memiliki hak akses, redirect ke halaman dashboard
        return redirect()->route('dashboard')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
    }
}
