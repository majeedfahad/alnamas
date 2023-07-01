<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class InformVoters
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->user() && $request->user()->shouldInformedAsVoter()) {
            Alert::info("واخترناك تصير مقيم!", 'تقدر تروح لصورة اليوم وتصوت عالصورة الأفضل، تقييمك له قدره')->autoClose(10000);
            $request->user()->informedAsVoter();
        }

        return $next($request);
    }
}
