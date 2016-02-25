<?php

namespace Venta\Console;

use Symfony\Component\Console\Command\Command as BaseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Venta\Console\Command\SignatureParser;
use Venta\Console\Interfaces\CommandInterface;

/**
 * Class Command
 *
 * @package Venta\Console
 */
abstract class Command extends BaseCommand implements CommandInterface
{
    /**
     * {@inheritdoc}
     */
    public function configure()
    {
        $signature = (new SignatureParser($this->signature()))->parse();

        $this->setName($signature['name']);
        $this->setDescription($this->description());

        if (is_array($signature['arguments'])) {
            foreach ($signature['arguments'] as $argument) {
                $this->addArgument($argument['name'], $argument['type'], $argument['description'], $argument['default']);
            }
        }

        if (is_array($signature['options'])) {
            foreach ($signature['options'] as $option) {
                $this->addOption($option['name'], null, $option['type'], $option['description'], $option['default']);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        return $this->handle($input, $output);
    }

    /**
     * {@inheritdoc}
     */
    public function description()
    {
        return null;
    }
}