<?php

namespace Venta\Console;

use Venta\ExtensionsLoader\ExtensionProvider;

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
    public function bindings($container)
    {
        $container->bind(
            \Venta\Contracts\Kernel\ConsoleKernelContract::class,
            \Venta\Console\Kernel\ConsoleKernel::class
        );
    }
}