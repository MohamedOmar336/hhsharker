<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use PDO;

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
        $user = Auth::user();
        $currentRouteName = Route::currentRouteName();
        $userPermissions = $user && isset($user->role->permissions) ? $user->role->permissions : null;
        if ($userPermissions && $currentRouteName != 'home') {

            if ($userPermissions && !in_array($currentRouteName, $userPermissions)) {
                Log::warning('User does not have permission for route: ' . $currentRouteName, [
                    'user_id' => $user->id,
                    'permissions' => $userPermissions,
                ]);

                // The user does not have permission for the current route
                // Redirect to a safe route or home page
                return redirect()->route('home')->with('error', 'You do not have permission to access this page.');
            }
        }

        // User has permission, allow the request to proceed
        return $next($request);
    }
}
