<?php declare(strict_types = 1);

namespace DemoApp;

require __DIR__ . '/../vendor/autoload.php';

$configurator = new \Nette\Bootstrap\Configurator();

$tempPath = __DIR__ . '/../temp';
$logPath = __DIR__ . '/../log';
$debugMode = getenv('DEBUG_MODE') === '1';
$configurator->setDebugMode($debugMode);

$configurator->enableTracy($logPath);
$configurator->setTempDirectory($tempPath);
$configurator->setTimeZone('Europe/Prague');

$configurator->addConfig(__DIR__ . '/Ingredient/config/config.neon');
$configurator->addConfig(__DIR__ . '/Core/config/config.neon');

$configurator->addParameters(['debugMode' => $debugMode]);

return $configurator->createContainer();
