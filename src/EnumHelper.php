<?php

declare(strict_types=1);

namespace object42\Enum;

use BackedEnum;

use function array_column;
use function count;

trait EnumHelper
{
    public static function names(): array
    {
        $cases = static::cases();

        if (count($cases) === 0) {
            return [];
        }

        return array_column($cases, 'name');
    }

    public static function values(): array
    {
        $cases = static::cases();

        if (count($cases) === 0) {
            return [];
        }

        $key = $cases[0] instanceof BackedEnum ? 'value' : 'name';

        return array_column($cases, $key);
    }
}
