<?php

namespace Grasmash\YamlCli\Command;

use Grasmash\YamlCli\Loader\JsonFileLoader;
use Symfony\Component\Console\Helper\FormatterHelper;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class CommandBase
 *
 * @package Grasmash\YamlCli\Command
 */
abstract class CommandBase extends Command
{
    /** @var Filesystem */
    protected $fs;
    /**
     * @var InputInterface
     */
    protected $input;
    /**
     * @var OutputInterface
     */
    protected $output;

    /** @var FormatterHelper */
    protected $formatter;

  /**
   * Initializes the command just after the input has been validated.
   *
   * @param InputInterface  $input  An InputInterface instance
   * @param OutputInterface $output An OutputInterface instance
   */
    protected function initialize(InputInterface $input, OutputInterface $output)
    {
        $this->input = $input;
        $this->output = $output;
        $this->formatter = $this->getHelper('formatter');
        $this->fs = new Filesystem();
    }
}
