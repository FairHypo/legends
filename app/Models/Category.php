<?php

namespace App\Models;

use App\Role;
use Riari\Forum\Models\Category as BaseCategory;

class Category extends BaseCategory
{
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function nameInRoleList(string $userRoleName): bool
    {
        return $this->roles()->whereIn('name', $userRoleName)->exists();
    }
}