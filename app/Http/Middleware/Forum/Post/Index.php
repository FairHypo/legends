<?php

namespace App\Http\Middleware\Forum\Post;

use App\Http\Middleware\Forum\CheckGate;
use Closure;

class Index extends CheckGate
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
        return $this->check('forum-index-post', null, $request, $next);
    }
}
