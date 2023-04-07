<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        // Retrieve the stored language from the session
        $lang = session('lang', config('app.locale'));
        // dd($lang);

        // Set the application's locale
        config(['app.locale' => $lang]);

        return $next($request);
    }
}