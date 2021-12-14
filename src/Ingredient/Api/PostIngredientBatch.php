<?php declare(strict_types = 1);

namespace DemoApp\Ingredient\Api;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class PostIngredientBatch
{
	public function __invoke(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
	{
		// TODO feature: (orm, design, async) create many ingredients according to user input
		return $response;
	}
}
