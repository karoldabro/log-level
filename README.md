# Log level
Enum for severity level indicator in php according to [RFC 5424](https://datatracker.ietf.org/doc/html/rfc5424)
## Installation
```shell
composer require kdabrow/log-level
```
## Usage

| Name      | Value |
| --------- | ----- |
| EMERGENCY | 0     |
| ALERT     | 1     |
| CRITICAL  | 2     |
| ERROR     | 3     |
| WARNING   | 4     |
| NOTICE    | 5     |
| INFO      | 6     |
| DEBUG     | 7     |

### Methods
#### toLower
Prints lower case log name
```php
<?php

use Kdabrow\LogLevel\Level;

echo Level::ERROR->toLower(); // prints: error
```

## Examples
### Compare by lower name
```php
<?php

use Kdabrow\LogLevel\Level;

if (Level::INFO->toLower() == 'info') {
    echo "is info level log";
}
```
### Compare by numeric value
```php
<?php

use Kdabrow\LogLevel\Level;

if (Level::INFO == 6) {
    echo "is info level log";
}
```
