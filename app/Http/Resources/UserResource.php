<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'                  => $this->id,
            'name'                => $this->name,
            'username'            => $this->username,
            'email'               => $this->email,
            'avatar'              => $this->avatar,
            'gender'              => $this->gender,
            'email_verified_at'   => $this->email_verified_at,
            'ip'                  => $this->ip,
            'latitude'            => $this->latitude,
            'longitude'           => $this->longitude,
            'time_zone'           => $this->time_zone,
            'language'            => $this->language,
            'status'              => $this->status,
            'is_deletable'        => $this->is_deletable,
            'is_editable'         => $this->is_editable,
            'unreadNotifications' => $this->whenLoaded('unreadNotifications'),
            'roles'               => $this->whenLoaded('roles', function ()
            {
                return RoleResource::collection($this->roles)->pluck('name');
            }),
            'permissions' => $this->whenLoaded('permissions', function ()
            {
                return PermissionResource::collection($this->getAllPermissions())->pluck('name');
            }),
            'addresses'  => AddressResource::collection($this->whenLoaded('addresses')),
            'created_at' => Carbon::parse($this->created_at)->diffForHumans(),
        ];
    }
}
