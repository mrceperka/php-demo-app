<?php declare(strict_types = 1);

namespace DemoApp\Core\Factory;

use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;

final class ResponseFactory implements ResponseFactoryInterface
{
	public function createResponse(int $code = 200, string $reasonPhrase = ''): ResponseInterface
	{
		$res = new Response($code, [], null, '1.1', $reasonPhrase);
		
		return $res;
	}
}
