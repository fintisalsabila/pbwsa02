<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsStaf
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Tambahan
        $user = Auth::user();
        
        // Jika user belum login atau bukan 'Staf'
        if (!$user || $user->role != 'Staf') {
            return redirect('/login');
        }
    
        // Akhir dari tambahan
        return $next($request);
    }
    
}
