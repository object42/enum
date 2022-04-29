<?php

declare(strict_types=1);

namespace object42\Enum\Tests;

use object42\Enum\Tests\Enums\BasicEnum;
use object42\Enum\Tests\Enums\EmptyEnum;
use object42\Enum\Tests\Enums\IntEnum;
use object42\Enum\Tests\Enums\NonEnum;
use object42\Enum\Tests\Enums\StringEnum;
use PHPUnit\Framework\TestCase;

class EnumHelperValuesTest extends TestCase
{
    /**
     * @dataProvider enumDataProvider
     */
    public function testValid(array $values, $expected): void
    {
        $this->assertEquals($expected, $values);
    }

    public function enumDataProvider(): array
    {
        return [
            [BasicEnum::values(), ['ONE' => 'ONE', 'TWO' => 'TWO']],
            [IntEnum::values(), ['ONE' => 1, 'TWO' => 2]],
            [StringEnum::values(), ['ONE' => 'one', 'TWO' => 'two']],
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
