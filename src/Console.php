<?php

namespace Venta\Console;

use Venta\Application\Interfaces\ApplicationInterface;
use Venta\Console\Interfaces\ConsoleHandlerInterface;

/**
 * Class Console
 *
 * @package Venta\Console
 */
class Console implements ConsoleHandlerInterface
{
    /**
     * Venta application instance holder
     *
     * @var \Venta\Application\Interfaces\ApplicationInterface
     */
    protected $_app;

    /**
     * Console application holder
     *
     * @var \Symfony\Component\Console\Application
     */
    protected $_console;

    /**
     * Construct function
     *
     * @param  \Venta\Application\Interfaces\ApplicationInterface $app
     */
    public function __construct(ApplicationInterface $app)
    {
        $this->_app = $app;

        $this->_createConsoleApplication();
        $this->_collectCommands();
    }

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        return $this->_console->run();
    }

    /**
     * Creates console application to use
     *
     * @return void
     */
    protected function _createConsoleApplication()
    {
        $this->_console = new \Symfony\Component\Console\Application('Venta console application', $this->_app->version());
    }

    /**
     * Collect all application defined commands and assign them to console application
     *
     * @return void
     */
    protected function _collectCommands()
    {
        
    }
}