<?php

namespace YOUR_NAMESPACE_HERE;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Psy;

/** @var $app \Silex\Application */

$console = new Application("YOUR_APPLICATION_NAME_HERE", '0.0.1');
$console->getDefinition()->addOption(new InputOption('--env', '-e', InputOption::VALUE_REQUIRED, 'The Environment name.', 'dev'));

$console->register('shell')
		->setDescription('PHP Shell with $app loaded for quick scripting')
		->setCode(function (InputInterface $input, OutputInterface $output) use ($app) {
			Psy\Shell::debug(['app' => $app]);
		});

return $console;
