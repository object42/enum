<?php

declare(strict_types=1);

namespace object42\Enum\Tests\Enums;

use object42\Enum\EnumHelper;

enum StringEnum:string
{
    use EnumHelper;

    case ONE = 'one';
    case TWO = 'two';
}
