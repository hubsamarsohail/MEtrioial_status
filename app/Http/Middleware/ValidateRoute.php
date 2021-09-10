<?php

namespace App\Http\Middleware;

use Closure;

class ValidateRoute
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
        $session = session()->get('b_user_data');
        $allowed_routes = $session['allowed_routes'];
        if (!in_array($request->route()->getName(), $allowed_routes)) {
            return redirect(route('aAccessDenied'));
        }
        return $next($request);
    }
}
