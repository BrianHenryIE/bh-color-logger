<?php

namespace BrianHenryIE\ColorLogger;

use PHPUnit\Framework\TestCase;

class ColorLoggerTest extends TestCase
{

    /**
     * Not a real test, just a test so I can make a screenshot.
     */
    public function testAllMethods()
    {

        $colorLogger = new ColorLogger();

        $colorLogger->debug('Detailed debug information.');

        $colorLogger->warning('Exceptional occurrences that are not errors.');

        $colorLogger->info('Interesting events.');

        $colorLogger->notice('Normal but significant events.');

        $colorLogger->error('Runtime errors that do not require immediate action but should typically be logged and monitored.');

        $colorLogger->alert('Action must be taken immediately.');

        $colorLogger->critical('Critical conditions.');

        $colorLogger->emergency('System is unusable.');

        $this->assertTrue(true);
    }
}
