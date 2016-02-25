<?php

namespace Venta\Console;

use Venta\Application\Extensions\Provider;

/**
 * Class ConsoleExtensionProvider
 *
 * @package Venta\Console
 */
class ConsoleExtensionProvider extends Provider
{
    /**
     * {@inheritdoc}
     */
    public function bindings()
    {
        return [
            [
                'alias' => \Venta\Application\Interfaces\ConsoleKernelInterface::class,
                'item' => \Venta\Console\Kernel\ConsoleKernel::class
            ],
            [
                'alias' => \Venta\Console\Interfaces\ConsoleHandlerInterface::class,
                'item' => \Venta\Console\Console::class
            ]
        ];
    }
}