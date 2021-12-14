<?php declare(strict_types = 1);
// Here you can initialize variables that will be available to your tests

/** @var \Nette\Configurator $configurator */

use Nextras\Migrations\Bridges\SymfonyConsole\ResetCommand;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;

$configurator = require __DIR__ . '/../../src/configurator.php';
$configurator->addConfig(__DIR__ . '/config.test.neon');

$container = $configurator->createContainer();

if (($_ENV['NO_RESET'] ?? false) !== "1") {
	$migrationsReset = $container->getByType(ResetCommand::class);
	$migrationsReset->run(new ArrayInput([]), new NullOutput());
} else {
	echo "Skipping mig:res, because NO_RESET is set to 1";
}

\Helper\Functional::setDI($container);
