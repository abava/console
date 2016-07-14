<?php

namespace Venta\Console\Interfaces;

/**
 * Interface ConsoleHandlerInterface
 *
 * @package Venta\Console
 */
interface ConsoleHandlerInterface
{
    /**
     * Main function what is executed on console application run.
     * Should return command exit code.
     *
     * @return int
     */
    public function handle();
}