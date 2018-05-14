<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const NAME_GUEST         = 'guest';
    const NAME_MEMBER        = 'member';
    const NAME_OFFICER       = 'officer';
    const NAME_MODERATOR     = 'moderator';
    const NAME_ADMINISTRATOR = 'administrator';
    const NAME_SUPERUSER     = 'superuser';

    const POWER_GUEST         = 1;
    const POWER_MEMBER        = 10;
    const POWER_OFFICER       = 50;
    const POWER_MODERATOR     = 100;
    const POWER_ADMINISTRATOR = 1000;
    const POWER_SUPERUSER     = 10000;

    protected $table = 'roles';

    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * @return array
     */
    public function powerList(): array
    {
        return [
            self::NAME_GUEST         => self::POWER_GUEST,
            self::NAME_MEMBER        => self::POWER_MEMBER,
            self::NAME_OFFICER       => self::POWER_OFFICER,
            self::NAME_MODERATOR     => self::POWER_MODERATOR,
            self::NAME_ADMINISTRATOR => self::POWER_ADMINISTRATOR,
            self::NAME_SUPERUSER     => self::POWER_SUPERUSER,
        ];
    }

    /**
     * @param string $roleName
     * @return int
     */
    public function nameToPower(string $roleName): int
    {
        return $this->powerList()[$roleName];
    }

    /**
     * @param string $roleName
     * @return bool
     */
    public function moreThan(string $roleName): bool
    {
        return $this->power > $this->nameToPower($roleName);
    }

    /**
     * @param string $roleName
     * @return bool
     */
    public function moreOrEqual(string $roleName): bool
    {
        return $this->power >= $this->nameToPower($roleName);
    }
}
