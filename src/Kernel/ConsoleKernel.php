<?php

namespace Venta\Console\Kernel;

use Venta\Application\Interfaces\ApplicationInterface;
use Venta\Application\Interfaces\ConsoleKernelInterface;

/**
 * Class ConsoleKernel
 *
 * @package Venta\Application
 */
class ConsoleKernel implements ConsoleKernelInterface
{
    /**
     * Application instance holder
     *
     * @var \Venta\Application\Interfaces\ApplicationInterface
     */
    protected $_app;

    /**
     * {@inheritdoc}
     */
    public function __construct(ApplicationInterface $app)
    {
        $this->_app = $app;
    }

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        /** @var \Venta\Console\Interfaces\ConsoleHandlerInterface $consoleApplication */
        $consoleApplication = $this->_app->make(\Venta\Console\Interfaces\ConsoleHandlerInterface::class);

        return $consoleApplication->handle();
    }

    /**
     * {@inheritdoc}
     */
    public function terminate($exitStatus)
    {

    }
}