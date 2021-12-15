<?php declare(strict_types = 1);

namespace DemoApp\Core\Factory;

use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;

final class ResponseFactory implements ResponseFactoryInterface
{
	public function createResponse(int $code = 200, string $reasonPhrase = ''): ResponseInterface
	{
		// TODO feature: (design) make specific Response class for this app
		// withJson() method might come in handy
		// withException($exception) as well
		$res = new Response($code, [], null, '1.1', $reasonPhrase);
		
		return $res;
	}
}
