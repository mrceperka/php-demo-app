<?php declare(strict_types = 1);

use DemoApp\Core\Factory\ServerFactory;

$container = require __DIR__ . '/../src/bootstrap.php';
$container->getByType(ServerFactory::class)
	->create()
	->run();
