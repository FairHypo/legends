<?php

namespace App\Policies;

use Carbon\Carbon;
use Riari\Forum\Models\Thread;
use Riari\Forum\Policies\ThreadPolicy as BaseThreadPolicy;

class ThreadPolicy extends BaseThreadPolicy
{
    public function rename($user, Thread $thread)
    {
        return (parent::rename($user, $thread) && $thread->created_at >= Carbon::now()->subDay()) || $user->isGod();
    }

    public function delete($user, Thread $thread)
    {
        return (parent::delete($user, $thread) && $thread->created_at >= Carbon::now()->subDay()) || $user->isGod();
    }
}