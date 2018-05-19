<?php

namespace App\Http\Middleware\Forum;

use Illuminate\Support\Facades\Gate;
use Closure;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

abstract class CheckGate
{
    protected function check(string $gate, $item, $request, Closure $next)
    {
        if (null === $item && Gate::allows($gate)) {
            return $next($request);
        }

        if (null !== $item && Gate::allows($gate, $item)) {
            return $next($request);
        }

        throw new AccessDeniedHttpException('Fuck off');
    }

    abstract public function handle($request, Closure $next);
}