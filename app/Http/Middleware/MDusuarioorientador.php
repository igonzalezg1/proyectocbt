<?php

namespace App\Http\Middleware;

use Closure;

class MDusuarioorientador
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
            if ($usuarioactual->id_tipo_user !=2) {
                return redirect('sin_acceso2');
            }
        }else{
            return redirect('login');
        }

        return $next($request);
    }
}
