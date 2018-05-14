<?php

namespace App\Policies;

use App\Models\CategoryUserRole;
use Riari\Forum\Models\Category;
use App\Role;
use Riari\Forum\Policies\CategoryPolicy as BaseCategoryPolicy;

class CategoryPolicy extends BaseCategoryPolicy
{
    public function createThreads($user, Category $category)
    {
        return CategoryUserRole::where('category_id', $category->id)->where('role_id', $user->role->id)->exists()
            || $user->role->moreOrEqual(Role::NAME_ADMINISTRATOR);
    }

    public function deleteThreads($user, Category $category)
    {
        return $user->isGod();
    }

    public function enableThreads($user, Category $category)
    {
        return $user->isGod();
    }

    public function moveThreadsFrom($user, Category $category)
    {
        return $user->isGod();
    }

    public function lockThreads($user, Category $category)
    {
        return $user->isGod();
    }

    public function pinThreads($user, Category $category)
    {
        return $user->isGod();
    }

    public function moveThreadsTo($user, Category $category)
    {
        return $user->isGod();
    }

    public function view($user, Category $category)
    {
        return CategoryUserRole::where('category_id', $category->id)->where('role_id', $user->role->id)->exists()
            || $user->role->moreOrEqual(Role::NAME_ADMINISTRATOR);
    }

    public function delete($user, Category $category)
    {
        return $user->isGod();
    }
}