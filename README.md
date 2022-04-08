# enum

adds helper functions for enums 

## installation

```
composer require object42/enum
```

## usage

first add the helper-trait to your enum:

```

<?php

declare(strict_types=1);

namespace App\Enums;

use object42\Enum\EnumHelper;

enum MyEnum:int
{
    use EnumHelper;

    case ONE = 1;
    case TWO = 2;
}

```

### names()

```
MyEnum::names(); // ['ONE', 'TWO']
```

### values()

```
MyEnum::values(); // [1, 2]
```

Note: pure enum (non-backed) will return the names (since they don't have values)
