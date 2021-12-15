<?php

namespace Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

use Codeception\Util\Fixtures;
use Nette\DI\Container;

class Functional extends \Codeception\Module
{
	public static function setDI(Container $container): void
	{
		Fixtures::add('container', $container);
	}
	
	public static function di(): Container
	{
		return Fixtures::get('container');
	}
}
