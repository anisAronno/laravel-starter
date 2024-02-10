<?php

namespace App\Enums;

use App\Traits\EnumToArray;

enum Status: string
{
    use EnumToArray;

    case PUBLISHED      = 'Published';
    case PENDING     = 'Pending';
    case DRAFT       = 'Draft';

    public function color()
    {
        return match ($this) {
            self::PUBLISHED      => 'badge-soft-success',
            self::PENDING     => 'badge-soft-info',
            self::DRAFT       => 'badge-soft-primary', 
        };
    }
}
