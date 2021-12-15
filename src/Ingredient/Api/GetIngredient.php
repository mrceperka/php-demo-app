<?php declare(strict_types = 1);

namespace DemoApp\Ingredient\Api;

use GuzzleHttp\Psr7\Utils;
use Nette\Utils\Json;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Routing\RouteContext;

final class GetIngredient
{
	public function __invoke(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
	{
		// TODO feature: (slim) use some helper or something better?
		$context = RouteContext::fromRequest($request);
		$id = $context->getRoute()->getArgument('id');
		
		// TODO feature: (orm) fetch from database
		return $response
			->withStatus(200)
			->withHeader('Content-Type', 'application/json')
			->withBody(
				Utils::streamFor(
					Json::encode(
						[
							'id'   => $id,
							'name' => 'test-name',
						]
					)
				)
			);
	}
}
