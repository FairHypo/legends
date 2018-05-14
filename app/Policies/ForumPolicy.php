<?php

namespace App\Policies;

use App\Role;
use Riari\Forum\Policies\ForumPolicy as BaseForumPolicy;

class ForumPolicy extends BaseForumPolicy
{
    public function createCategories($user)
    {
        return $user->isGod();
    }

    public function moveCategories($user)
    {
        return $user->isGod();
    }

    public function renameCategories($user)
    {
        return $user->isGod();
    }

    public function viewTrashedThreads($user)
    {
        return $user->role->moreOrEqual(Role::NAME_MODERATOR);
    }

    public function viewTrashedPosts($user)
    {
        return $user->role->moreOrEqual(Role::NAME_MODERATOR);
    }
}