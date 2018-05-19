<?php

namespace App\Http\Middleware\Forum\Discussion;

use Closure;
use App\Http\Middleware\Forum\CheckGate;
use DevDojo\Chatter\Models\Discussion;

class Show extends CheckGate
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
        $discussion = Discussion::whereSlug($request->route()->parameter('slug'))->first();
        return $this->check('forum-show-discussion', $discussion, $request, $next);
    }
}
