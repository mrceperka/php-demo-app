<?php declare(strict_types = 1);

namespace DemoApp\Ingredient\Api;

use GuzzleHttp\Psr7\Utils;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class GetIngredient
{
	public function __invoke(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
	{
		// TODO feature: fetch from database
		return $response->withBody(
			Utils::streamFor(
				json_encode(
					[
						'id'   => 'test',
						'name' => 'test-name',
					]
				)
			)
		);
	}
}
