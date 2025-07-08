<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EnsureUserIsLoggedIn
{
    public function handle(Request $request, Closure $next)
    {
        if (
            !Session::has('student_id') &&
            !Session::has('teacher_id') &&
            !Session::has('parent_id') &&
            !Session::has('admin_id')
        ) {
            return redirect()->route('schoolproject.index')->withErrors(['Access denied. Please log in.']);
        }
        // return redirect()->route('schoolproject.index')->withErrors(['Access denied. Please log in.']);

        return $next($request);
    }
}

        // return $next($request);