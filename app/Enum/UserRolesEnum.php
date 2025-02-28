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
}
