<?php

namespace App\Http\Middleware\Forum\Post;

use App\Http\Middleware\Forum\CheckGate;
use Closure;
use DevDojo\Chatter\Models\Post;

class Destroy extends CheckGate
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
