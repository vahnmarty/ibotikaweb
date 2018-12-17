<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Webhook;

class ApiAuthorized
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
        $token = $request->token;
        $secret = $request->secret;
        if(Webhook::where('token', $token)->where('secret', $secret)->where('is_valid', true)->exists())
        return $next($request);

        abort(503, 'Unauthorized');
    }
}
