# Marajeo/Opensource

## Overview

Marajeo/Opensource is a PHP package built on top of Voku/ArrayHelpers, providing a comprehensive set of array manipulation utilities for open-source projects. Leveraging the power and flexibility of Voku's array handling capabilities, Marajeo/Opensource extends functionality to streamline common tasks associated with array manipulation in PHP applications.

## Features

- **Advanced Array Filtering**: Filter arrays using complex criteria with ease.
- **Efficient Array Mapping**: Transform array elements efficiently and flexibly.
- **Customizable Array Sorting**: Sort arrays based on custom comparison functions.
- **Intuitive Array Searching**: Quickly locate elements within arrays using various search methods.
- **Flexible Array Chunking**: Divide arrays into chunks with customizable chunk sizes.

## Installation

Install Marajeo/Opensource via Composer by executing the following command in your terminal:

```bash
composer require marajeo/opensource
```

Usage

Utilize the array manipulation functions provided by Marajeo/Opensource in your PHP projects as follows:
Filtering Arrays

```php

use Marajeo\Opensource\ArrayHelpers;

$array = [1, 2, 3, 4, 5];
$result = ArrayHelpers::filter($array, function($value) {
    return $value % 2 === 0;
});

// Result: [2, 4]
```

## Mapping Arrays

```php

use Marajeo\Opensource\ArrayHelpers;

$array = [1, 2, 3, 4, 5];
$result = ArrayHelpers::map($array, function($value) {
    return $value * 2;
});

// Result: [2, 4, 6, 8, 10]
```


## Sorting Arrays

```php

use Marajeo\Opensource\ArrayHelpers;

$array = [5, 3, 1, 4, 2];
$result = ArrayHelpers::sort($array);

// Result: [1, 2, 3, 4, 5]
```

## Searching Arrays

```php

use Marajeo\Opensource\ArrayHelpers;

$array = ['apple', 'banana', 'orange', 'grape'];
$result = ArrayHelpers::search($array, 'orange');

// Result: true
```

### Chunking Arrays

```php

use Marajeo\Opensource\ArrayHelpers;

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$result = ArrayHelpers::chunk($array, 3);

// Result: [[1, 2, 3], [4, 5, 6], [7, 8, 9]]
```

## Contributing

Contributions to Marajeo/Opensource are encouraged and appreciated! Feel free to contribute by reporting bugs, suggesting features, or submitting pull requests on the GitHub repository.
License

## Marajeo/Opensource is licensed under the MIT License. See the LICENSE file for more details.