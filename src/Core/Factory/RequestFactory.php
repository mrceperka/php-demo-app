<?php declare(strict_types = 1);

namespace DemoApp\Core\Factory;

use GuzzleHttp\Psr7\ServerRequest;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Interfaces\ServerRequestCreatorInterface;

final class RequestFactory implements ServerRequestCreatorInterface
{
	public function createServerRequestFromGlobals(): ServerRequestInterface
	{
		// TODO feature: (design) make specific Request class for this app. Might be helpful.
		return ServerRequest::fromGlobals();
	}
}
