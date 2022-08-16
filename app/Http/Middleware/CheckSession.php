<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\MessageBag;

class CheckSession
{
    protected $except = [
        '/login',
        '/api/login',
        '/register',
        '/api/register',
        '/',
    ];


      /**
     * Determine if the request has a URI that should pass through.
     *
     * @param Request $request
     * @return bool
     */
    protected function inExceptArray($request)
    {
        foreach ($this->except as $except) {
            if ($except !== '/') {
                $except = trim($except, '/');
            }

            if ($request->is($except)) {
                return true;
            }
        }

        return false;
    }
    
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        Log::info(['session' => session('user')]);
         // check user authed or API Key
         if (!$this->inExceptArray($request)) {
            // Process middleware checks and return if failed...
            if (!session('user')) {
              // Middleware failed, send back response

                return response()->json(['failed' => session('user')]);
            }
        }
        
        // Middleware passed or in Except array
        return $next($request);
    }
}
