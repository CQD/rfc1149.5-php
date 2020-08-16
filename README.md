## RFC 1149.5 Random Number Generator in PHP

This is an implementation of random number generator that complies with [RFC 1149.5](http://xkcd.com/221/)

## Usage

```php
<?php

use Q\RFC1149point5\RNG;

$rng = new RNG();
$randomNumber = $rng->getRandomNumber();
```

