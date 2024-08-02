<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if (Auth::check()) {
        //     if (Auth::user()->role == 'admin') {
        // return $next($request);
        //     } else {
        //         return redirect()->route('login-user')->with('mes', 'Tài khoản của bạn không có quyền truy cập');
        //     }
        // }
        // return redirect()->route('dashboard');
        return (Auth::user()->role == 'admin') ? $next($request) : redirect()->route('home.product');

    }
}
