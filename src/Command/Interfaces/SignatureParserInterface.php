<?php

namespace Venta\Console\Command\Interfaces;

/**
 * Interface SignatureParserInterface
 *
 * @package Venta\Console
 */
interface SignatureParserInterface
{
    /**
     * Construct function
     *
     * @param string $signature
     */
    public function __construct($signature);

    /**
     * Returns array with parsed signature data
     *
     * @return array
     */
    public function parse();
}
