<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetWebLocale
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
        // if(!$request->route('locale') || !in_array($request->route('locale'),['en','ar'])){
        //     return redirect()->route('frontend.home',['locale' => 'en']);
        // }
        $locale = $request->route('locale', config('app.locale'));
        if (in_array($locale, ['en', 'ar'])) { // Add your supported locales here
            App::setLocale($locale);
        }
        return $next($request);
    }
}
