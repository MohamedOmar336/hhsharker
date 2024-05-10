<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class CheckPermissions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        $currentRouteName = Route::currentRouteName();
        $userPermissions = isset(auth()->user()->role->permissions) ? auth()->user()->role->permissions : null;
        if ($userPermissions) {

            if (!in_array($currentRouteName, $userPermissions)) {
                // The user does not have permission for the current route
                // You may want to redirect them or display an error message
                return redirect()->route('home')->with('error', 'You do not have permission.');
            }
        }

        // User has permission, allow the request to proceed
        return $next($request);
    }
}
