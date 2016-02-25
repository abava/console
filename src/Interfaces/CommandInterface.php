<?php

namespace Venta\Console\Interfaces;

/**
 * Interface CommandInterface
 *
 * @package Venta\Console
 */
interface CommandInterface
{
    /**
     * Should return string with command signature
     *
     * @return string
     */
    public function signature();

    /**
     * Returns command description text
     *
     * @return string
     */
    public function description();

    /**
     * Main command function, which is executed on command run
     *
     * @param  \Symfony\Component\Console\Input\InputInterface $input
     * @param  \Symfony\Component\Console\Output\OutputInterface $output
     * @return null|int
     */
    public function handle($input, $output);
}