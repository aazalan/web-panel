<?php

namespace Database\Seeders;

use App\Enum\UserRolesEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = UserRolesEnum::cases();

        foreach ($roles as $role) {
            $roleModel = Role::findOrCreate($role->value);
            $permissions = $role->getPermissionsForRole();
            foreach ($permissions as $permission) {
                $permissionModel = Permission::findOrCreate($permission->value);
                $roleModel->givePermissionTo($permissionModel);
            }
        }
    }
}
