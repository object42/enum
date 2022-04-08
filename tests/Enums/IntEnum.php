<?php

declare(strict_types=1);

namespace object42\Enum\Tests\Enums;

use object42\Enum\EnumHelper;

enum IntEnum:int
{
    use EnumHelper;

    case ONE = 1;
    case TWO = 2;
}
