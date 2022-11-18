<?php

namespace App\Http\Middleware;

use Closure;

class Aph
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
        $user = \Auth::User();
        if($user == null){
            return redirect()->route('vistasNoLogin.error');
        }else{
            if(($user->IDCARG == 124) || ($user->IDCARG == 130) || ($user->IDCARG == 110) || ($user->IDCARG == 2) || ($user->IDCARG == 1))
                return redirect()->route('error');
            if(($user->IDCARG == 125))
                return redirect()->route('vistasRadioOperador.error');
            if(($user->IDCARG == 126) || ($user->IDCARG == 110))
                return redirect()->route('vistasConductor.error');
            if(($user->IDCARG != 124) && ($user->IDCARG != 130) && ($user->IDCARG != 125)
            && ($user->IDCARG != 126) && ($user->IDCARG != 110) && ($user->IDCARG != 152)
            && ($user->IDCARG != 2) && ($user->IDCARG != 1))
                return redirect('/sinAcceso');
        }
        return $next($request);
    }
}
