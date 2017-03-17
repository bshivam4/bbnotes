<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckAdmin
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
        if(Auth::guest())
        {
            return redirect('login');
        }
        else
        {
            $mailArray = array("bshivam4@gmail.com", "shubhbhatia24@gmail.com");

           $email=Auth::user()->email;
            if( ! in_array($email, $mailArray))
            {
                return redirect('home');
            } 
        }
        
        return $next($request);
    }
}
