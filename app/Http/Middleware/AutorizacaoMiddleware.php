<?php namespace estoque\Http\Middleware;
use Closure;
class AutorizacaoMiddleware {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    /*
    *
    * hoje estou configurando o git
    */
    public function handle($request, Closure $next)
    {
        
        if (!$request->is('auth/login') && \Auth::guest()) {
            
            return redirect('/login');
        }
        return $next($request);
    }
}