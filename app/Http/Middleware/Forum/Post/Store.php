<?php

namespace App\Http\Middleware\Forum\Post;

use App\Http\Middleware\Forum\CheckGate;
use DevDojo\Chatter\Models\Discussion;
use Closure;

class Store extends CheckGate
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
        $discussion = Discussion::find($request->chatter_discussion_id);
        return $this->check('forum-store-post', $discussion, $request, $next);
    }
}
