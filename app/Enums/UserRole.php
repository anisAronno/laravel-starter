<?php

namespace App\Enums;

use App\Traits\EnumToArray;

enum UserRole: string
{
    use EnumToArray;

    case SUPERADMIN = 'SuperAdmin';
    case ADMIN = 'Admin';
    case EDITOR = 'Editor';
    case USER = 'User';
    case CUSTOMER = 'Customer';
    case SUBSCRIBER = 'Subscriber';
}
