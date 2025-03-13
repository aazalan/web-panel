<?php

namespace App\Enum;

enum UserRolesEnum: string
{
    case USER = 'user';
    case ADMIN = 'admin';

    public function getPermissionsForRole(): array
    {
        return match ($this->value) {
            'user' => [

            ],
            'admin' => [

            ],
        };
    }

    public function getRoleName(): string
    {
        return match ($this) {
            self::USER => __('system.roles.user'),
            self::ADMIN => __('system.roles.admin'),
        };
    }
}
