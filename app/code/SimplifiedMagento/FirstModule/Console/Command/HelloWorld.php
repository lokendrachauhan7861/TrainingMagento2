<?php

namespace SimplifiedMagento\FirstModule\Console\Command;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloWorld extends Command
{
    public function configure()
    {
        $this->setName( name: 'training:hello_world')
        ->setDescription( description: 'the command print out hello world')
        ->setAliases(array('hw'));

        $this->setDefinition([
            new InputArgument("name", InputArgument::OPTIONAL,'the name of the person', null, null)
     ]);
    }
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello World,'.$input->getArgument('name'));
        return 0;
    }
}