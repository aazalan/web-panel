<?php

namespace App\Http\Resources\web;

use App\Enum\UserRolesEnum;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $userRoleModel = $this->resource->roles()->first();
        if ($userRoleModel) {
            $role = UserRolesEnum::from($userRoleModel->name)->getRoleName();
        }
        return [
            'id' => $this->resource->id,
            'name' => $this->resource->name,
            'email' => $this->resource->email,
            'role' => $role ?? NULL,
        ];
    }
}
