<?php

namespace App\Http\Middleware\Forum\Category;

use Closure;
use DevDojo\Chatter\Models\Category;
use App\Http\Middleware\Forum\CheckGate;

class Show extends CheckGate
{
    /**
     * @param $request
     * @param Closure $next
     * @return mixed
     * @throws \Exception
     */
    public function handle($request, Closure $next)
    {
        $category = Category::whereSlug($request->route()->parameter('slug'))->first();
        return $this->check('forum-show-category', $category, $request, $next);
    }
}
