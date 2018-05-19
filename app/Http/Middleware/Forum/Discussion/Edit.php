<?php

namespace App\Http\Middleware\Forum\Discussion;

use App\Http\Middleware\Forum\CheckGate;
Use DevDojo\Chatter\Models\Discussion;
use Closure;

class Edit extends CheckGate
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
        return $this->check('forum-edit-discussion', $discussion, $request, $next);
    }
}
