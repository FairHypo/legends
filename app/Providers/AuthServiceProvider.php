<?php

namespace App\Providers;

use App\Role;
use App\RoleChatterCategory;
use App\User;
use Carbon\Carbon;
use DevDojo\Chatter\Models\Category;
use DevDojo\Chatter\Models\Discussion;
use DevDojo\Chatter\Models\Post;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //you can everything if you are God
        Gate::before(function (User $user, $ability) {
            if ($user->role->moreOrEqual(Role::NAME_MODERATOR)) {
                return true;
            }
        });

        //category gates
        Gate::define('forum-show-category', function (User $user, Category $category) {
            return RoleChatterCategory::whereRoleId($user->role->id)->whereChatterCategoryId($category->id)->exists();
        });

        //discussion gates
        Gate::define('forum-index-discussion', function (User $user) {
            return $user->role->moreOrEqual(Role::NAME_GUEST);
        });
        Gate::define('forum-show-discussion', function (User $user, Discussion $discussion) {
            return RoleChatterCategory::whereRoleId($user->role->id)->whereChatterCategoryId($discussion->category->id)->exists();
        });
        Gate::define('forum-create-discussion', function (User $user) {
            return $user->role->moreOrEqual(Role::NAME_GUEST);
        });
        Gate::define('forum-store-discussion', function (User $user, Category $category) {
            return RoleChatterCategory::whereRoleId($user->role->id)->whereChatterCategoryId($category->id)->exists();
        });
        Gate::define('forum-destroy-discussion', function (User $user, Discussion $discussion) {
            return $discussion->created_at >= Carbon::now()->subDay()
                && $discussion->user_id === $user->id
                && RoleChatterCategory::whereRoleId($user->role->id)
                    ->whereChatterCategoryId($discussion->category->id)
                    ->exists();
        });
        Gate::define('forum-edit-discussion', function (User $user, Discussion $discussion) {
            return $discussion->created_at >= Carbon::now()->subDay()
                && $discussion->user_id === $user->id
                && RoleChatterCategory::whereRoleId($user->role->id)
                ->whereChatterCategoryId($discussion->category->id)
                ->exists();
        });
        Gate::define('forum-update-discussion', function (User $user, Discussion $discussion) {
            return $discussion->created_at >= Carbon::now()->subDay()
                && $discussion->user_id === $user->id
                && RoleChatterCategory::whereRoleId($user->role->id)
                    ->whereChatterCategoryId($discussion->category->id)
                    ->exists();
        });

        //post gates
        Gate::define('forum-index-post', function (User $user) {
            return $user->role->moreOrEqual(Role::NAME_GUEST);
        });
        Gate::define('forum-show-post', function (User $user, Post $post) {
            return RoleChatterCategory::whereRoleId($user->role->id)->whereChatterCategoryId($post->discussion->category->id)->exists();
        });
        Gate::define('forum-create-post', function (User $user, Category $category) {
            return RoleChatterCategory::whereRoleId($user->role->id)->whereChatterCategoryId($category->id)->exists();
        });
        Gate::define('forum-store-post', function (User $user, Discussion $discussion) {
            return RoleChatterCategory::whereRoleId($user->role->id)->whereChatterCategoryId($discussion->category->id)->exists();
        });
        Gate::define('forum-destroy-post', function (User $user, Post $post) {
            return $post->created_at >= Carbon::now()->subDay()
                && $post->user_id === $user->id
                && RoleChatterCategory::whereRoleId($user->role->id)
                    ->whereChatterCategoryId($post->discussion->category->id)
                    ->exists();
        });
        Gate::define('forum-edit-post', function (User $user, Post $post) {
            return $post->created_at >= Carbon::now()->subDay()
                && $post->user_id === $user->id
                && RoleChatterCategory::whereRoleId($user->role->id)
                    ->whereChatterCategoryId($post->discussion->category->id)
                    ->exists();
        });
        Gate::define('forum-update-post', function (User $user, Post $post) {
            return $post->created_at >= Carbon::now()->subDay()
                && $post->user_id === $user->id
                && RoleChatterCategory::whereRoleId($user->role->id)
                    ->whereChatterCategoryId($post->discussion->category->id)
                    ->exists();
        });
    }
}
