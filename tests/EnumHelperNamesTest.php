<?php

declare(strict_types=1);

namespace object42\Enum\Tests;

use object42\Enum\Tests\Enums\BasicEnum;
use object42\Enum\Tests\Enums\EmptyEnum;
use object42\Enum\Tests\Enums\IntEnum;
use object42\Enum\Tests\Enums\NonEnum;
use object42\Enum\Tests\Enums\StringEnum;
use PHPUnit\Framework\TestCase;

class EnumHelperNamesTest extends TestCase
{
    /**
     * @dataProvider enumDataProvider
     */
    public function testValid(array $values): void
    {
        $expected = [
            'ONE',
            'TWO',
        ];

        $this->assertEquals($expected, $values);
    }

    public function enumDataProvider(): array
    {
        return [
            [BasicEnum::names()],
            [IntEnum::names()],
            [StringEnum::names()],
        ];
    }

    public function testEmptyEnum(): void
    {
        $this->assertEquals([], EmptyEnum::values());
    }

    public function testErrorOnNonEnum(): void
    {
        $this->expectError();

        NonEnum::values();
    }
}
