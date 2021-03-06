<?php 

namespace Acme;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class SayHelloCommand extends Command {

	public function configue()
	{
		$this->setName('sayHelloTo')
		     ->setDescription('Is going to say hello back')
		     ->addArgument('name', InputArgument::REQUIRED, 'Your name.');
	}

	public function execute(InputInterface $input, OutputInterface $output)
	{
		$message = "Hello World, my name is: " . $input->getArgument('name');

        	$output->writeln("<info>{$message}</info>");
	}

}

?>
