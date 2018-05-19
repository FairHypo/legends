<?php

namespace App\Http\Middleware\Forum\Discussion;

use Closure;
use App\Http\Middleware\Forum\CheckGate;
use DevDojo\Chatter\Models\Category;

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
        $category = Category::find($request->chatter_category_id);
        return $this->check('forum-store-discussion', $category, $request, $next);
    }
}
