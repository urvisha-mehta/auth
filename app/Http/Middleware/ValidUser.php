<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ValidUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        echo "<h3 class='text-primary'>Now You Are Validate User Middleware Accepted</h3>";
        // return $next($request);
        // echo "<h3 class='text-primary'>" . $role . "</h3>";

        if (Auth::check()) {
            return $next($request);
        } else {
            return redirect()->route('login');
        }


        // if (Auth::user()) {
        //     return $next($request);
        // } else {
        //     return redirect()->route('login');
        // }
    }

    // terminate use for all response complete, all authentication complete, after that run terminate method
    public function terminate(Request $request, Response $response): void
    {
        echo "<h3 class='text-danger'>Now You Are Terminate User Middleware</h3>";
    }
}
