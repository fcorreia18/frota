<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (!$request->user() || !in_array($request->user()->auth_level, $roles)) {
            // abort(403, 'Acesso negado.'); RETORNO PARA API
            session()->flush();
            return redirect()->route("login")->with("error", "sem permissão de acesso");
        }

        return $next($request);
    }
}
