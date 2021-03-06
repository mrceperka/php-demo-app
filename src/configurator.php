<?php declare(strict_types = 1);

namespace DemoApp;

use Nette\Bootstrap\Configurator;

require __DIR__ . '/../vendor/autoload.php';

$configurator = new Configurator();

$tempPath = __DIR__ . '/../temp';
$logPath = __DIR__ . '/../log';

$currentDir = getcwd();
if ($currentDir === false) {
	echo 'Unable to get cwd' . PHP_EOL;
	exit(1);
}
foreach (
	[
		$tempPath,
		$logPath,
	] as $dir
) {
	chdir($dir);
	umask(0000);
}
chdir($currentDir);

$debugMode = getenv('DEBUG_MODE') === '1';
$configurator->setDebugMode($debugMode);

$configurator->enableTracy($logPath);
$configurator->setTempDirectory($tempPath);
$configurator->setTimeZone('Europe/Prague');

$configurator->addConfig(__DIR__ . '/Ingredient/config/config.neon');
$configurator->addConfig(__DIR__ . '/Core/config/config.neon');

$configurator->addParameters(['debugMode' => $debugMode]);

return $configurator;
