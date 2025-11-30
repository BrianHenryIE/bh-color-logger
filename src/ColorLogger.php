<?php

/**
 * A PSR logger that logs in colour.
 *
 * Conceived to use during unit tests.
 */

namespace BrianHenryIE\ColorLogger;

use Psr\Log\LogLevel;
use Psr\Log\Test\TestLogger;
use Stringable;

class ColorLogger extends TestLogger
{

    /**
     * Logs with an arbitrary level.
     *
     * @param mixed $level
     * @param string $message
     * @param mixed[] $context
     *
     * @return void
     *
     * @throws \Psr\Log\InvalidArgumentException
     */
    public function log($level, Stringable|string $message, array $context = []): void
    {
        parent::log($level, $message, $context);

        switch ($level) {
            case LogLevel::EMERGENCY:
                echo "\033[95mEmergency \033[0m  : ";
                break;
            case LogLevel::ALERT:
                echo "\033[31mAlert \033[0m      : ";
                break;
            case LogLevel::CRITICAL:
                echo "\033[35mCritical \033[0m   : ";
                break;
            case LogLevel::ERROR:
                echo "\033[91mError \033[0m      : ";
                break;
            case LogLevel::WARNING:
                echo "\033[33mWarning \033[0m    : ";
                break;
            case LogLevel::NOTICE:
                echo "\033[34mNotice \033[0m     : ";
                break;
            case LogLevel::INFO:
                echo "\033[32mInfo \033[0m       : ";
                break;
            case LogLevel::DEBUG:
                echo "\033[90mDebug \033[0m      : ";
                break;
            default:
        }
        echo "{$message}\n";
        if(function_exists('codecept_debug')) {
            codecept_debug("{$message}\n");
        }
        ob_flush();
    }
}
