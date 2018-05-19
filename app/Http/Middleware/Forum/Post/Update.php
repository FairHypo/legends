<?php

namespace App\Http\Middleware\Forum\Post;

use App\Http\Middleware\Forum\CheckGate;
use DevDojo\Chatter\Models\Post;
use Closure;

class Update extends CheckGate
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
        $post = Post::find($request->route()->parameter('post'));
        return $this->check('forum-destroy-post', $post, $request, $next);
    }
}
