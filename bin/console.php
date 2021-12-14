#!/usr/bin/env php
<?php declare(strict_types = 1);

/** @var Nette\DI\Container $container */
$container = require __DIR__ . '/../src/bootstrap.php';

/** @var Contributte\Console\Application $application */
$application = $container->getByType(Contributte\Console\Application::class);
$application->run();
