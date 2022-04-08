<?php

declare(strict_types=1);

namespace object42\Enum\Tests\Enums;

use object42\Enum\EnumHelper;

enum BasicEnum
{
    use EnumHelper;

    case ONE;
    case TWO;
}
