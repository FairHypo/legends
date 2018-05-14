<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function isGuest()
    {
        return $this->role->name === Role::NAME_GUEST;
    }

    public function isMember()
    {
        return $this->role->name === Role::NAME_MEMBER;
    }

    public function isOfficer()
    {
        return $this->role->name === Role::NAME_OFFICER;
    }

    public function isModerator()
    {
        return $this->role->name === Role::NAME_MODERATOR;
    }

    public function isAdmin()
    {
        return $this->role->name === Role::NAME_ADMINISTRATOR;
    }

    public function isSuperuser()
    {
        return $this->role->name === Role::NAME_SUPERUSER;
    }

    public function isGod()
    {
        return $this->isAdmin() || $this->isSuperuser();
    }
}
