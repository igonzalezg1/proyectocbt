<?php

namespace App\Http\Middleware;

use Closure;

class MDusuarioadmin
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
        $usuarioactual=\Auth::user();
        if(isset($usuarioactual)){
            if ($usuarioactual->id_tipo_user !=1) {
                return redirect('sin_acceso');
            }
        }else{
            return redirect('login');
        }

        return $next($request);
    }
}
