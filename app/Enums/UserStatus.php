<?php

namespace App\Enums;

use App\Traits\EnumToArray;

enum UserStatus: string
{
    use EnumToArray;

    case ACTIVE      = 'Active';
    case PENDING     = 'Pending';
    case BLOCK       = 'Block';
    case BANNED      = 'Banned';
    case COMPLETED   = 'Completed';
    case UNCOMPLETED = 'Uncompleted';
    case REJECTED    = 'Rejected';

    public function color()
    {
        return match ($this) {
            self::ACTIVE      => 'badge-soft-success',
            self::PENDING     => 'badge-soft-info',
            self::BLOCK       => 'badge-soft-danger',
            self::BANNED      => 'badge-soft-danger',
            self::COMPLETED   => 'badge-soft-primary',
            self::UNCOMPLETED => 'badge-soft-warning',
            self::REJECTED    => 'badge-soft-danger',
        };
    }
}
