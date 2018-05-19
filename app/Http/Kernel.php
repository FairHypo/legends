<?php

namespace App\Http;

use App\Http\Middleware\Forum\Category\Show as ShowCategory;
use App\Http\Middleware\Forum\Discussion\Show as ShowDiscussion;
use App\Http\Middleware\Forum\Discussion\Store as StoreDiscussion;
use App\Http\Middleware\Forum\Discussion\Create as CreateDiscussion;
use App\Http\Middleware\Forum\Discussion\Destroy as DestroyDiscussion;
use App\Http\Middleware\Forum\Discussion\Edit as EditDiscussion;
use App\Http\Middleware\Forum\Discussion\Index as IndexDiscussion;
use App\Http\Middleware\Forum\Discussion\Update as UpdateDiscussion;
use App\Http\Middleware\Forum\Post\Show as ShowPost;
use App\Http\Middleware\Forum\Post\Store as StorePost;
use App\Http\Middleware\Forum\Post\Create as CreatePost;
use App\Http\Middleware\Forum\Post\Destroy as DestroyPost;
use App\Http\Middleware\Forum\Post\Edit as EditPost;
use App\Http\Middleware\Forum\Post\Index as IndexPost;
use App\Http\Middleware\Forum\Post\Update as UpdatePost;
use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        \App\Http\Middleware\TrustProxies::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:60,1',
            'bindings',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'forum.category.show' => ShowCategory::class,
        'forum.discussion.index' => IndexDiscussion::class,
        'forum.discussion.show' => ShowDiscussion::class,
        'forum.discussion.store' => StoreDiscussion::class,
        'forum.discussion.edit' => EditDiscussion::class,
        'forum.discussion.update' => UpdateDiscussion::class,
        'forum.discussion.create' => CreateDiscussion::class,
        'forum.discussion.destroy' => DestroyDiscussion::class,
        'forum.post.index' => IndexPost::class,
        'forum.post.show' => ShowPost::class,
        'forum.post.store' => StorePost::class,
        'forum.post.edit' => EditPost::class,
        'forum.post.update' => UpdatePost::class,
        'forum.post.create' => CreatePost::class,
        'forum.post.destroy' => DestroyPost::class,
    ];
}
