<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Auth::check()) {
            return redirect('/login');
        }
        if(Auth::user()->roles()->where('title','HocVien')->count() > 0 && Auth::user()->roles()->where('title', 'GiaoVien')->count() == 0 && Auth::user()->roles()->where('title', 'Admin')->count() == 0 && Auth::user()->roles()->where('title', 'NhanVien')->count() == 0)  {
            return redirect('/dashboard');
        }

        return $next($request);
    }
}
