# ColorLogger

A [PSR-3 logger](https://www.php-fig.org/psr/psr-3/) to use during PHPUnit tests.

Prints the log level in colour, the message as normal, no time, and no context.

![Wonderful, wonderful colours](./assets/screenshot-1.png "Printed logs with colour")

```
composer require --dev brianhenryie/color-logger
```

Then, presuming your classes [`use LoggerAwareTrait`](https://github.com/php-fig/log/blob/master/Psr/Log/LoggerAwareTrait.php):

```php
$myclass = new MyClass();
$colorLogger = new \BrianHenryIE\ColorLogger\ColorLogger();
$myclass->setLogger($colorLogger);
```
