<?php

namespace App\Http\Middleware;

use Closure;

class CompanyAgentMiddleware
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
        $user=Auth::user();
        if($user->isCompanyAgent()){
            // Redirect to Company branding page
            return $next($request);
        }
        // Redirect to applicant page
        return $next($request);

    }
}
