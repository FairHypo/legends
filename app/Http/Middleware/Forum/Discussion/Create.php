<?php

namespace App\Http\Middleware\Forum\Discussion;

use Closure;
use App\Http\Middleware\Forum\CheckGate;
use DevDojo\Chatter\Models\Category;

class Create extends CheckGate
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
        return $this->check('forum-create-discussion', null, $request, $next);
    }
}
