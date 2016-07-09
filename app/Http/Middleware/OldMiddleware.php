<?php

namespace App\Http\Middleware;

use Closure;

class OldMiddleware
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
        //http://localhost/laravel5.2/public/show?age=145
        if ($request->input('age') <= 200) {
            //return redirect('/');
            dd("你还太年轻小伙子");
        }
        return $next($request);
    }
}
