<?php

namespace Venta\Console;

use Venta\Application\ExtensionProvider;

/**
 * Class ConsoleExtensionProvider
 *
 * @package Venta\Console
 */
class ConsoleExtensionProvider extends ExtensionProvider
{
    /**
     * {@inheritdoc}
     */
    public function bindings()
    {
        return [
            [
                'alias' => \Venta\Application\Interfaces\ConsoleKernelInterface::class,
                'item' => \Venta\Application\Kernel\ConsoleKernel::class
            ],
            [
                'alias' => \Venta\Console\Interfaces\ConsoleHandlerInterface::class,
                'item' => \Venta\Console\Console::class
            ]
        ];
    }
}