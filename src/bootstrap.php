<?php declare(strict_types = 1);

namespace DemoApp;

/** @var \Nette\Configurator $configurator */
$configurator = require_once __DIR__ . '/configurator.php';

$container = $configurator->createContainer();

return $container;
