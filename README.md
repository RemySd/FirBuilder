# FirBuilder
Build a fir with simple text

![Packagist Version](https://img.shields.io/packagist/v/remysd/fir_builder)
![PHP from Packagist](https://img.shields.io/packagist/php-v/remysd/fir_builder)
![PHP from Packagist](https://img.shields.io/packagist/l/remysd/fir_builder)

## Installation

```bash
composer require remysd/fir_builder
```

## Example

```php
<?php
$firBuilder = new \FirBuilder\FirBuilder();
$firBuilder->setDefaultChar('X');

echo $firBuilder->getFir(5);
```

### Result

```bash
     X     
    XXX
   XXXXX
  XXXXXXX
 XXXXXXXXX
     X
```
