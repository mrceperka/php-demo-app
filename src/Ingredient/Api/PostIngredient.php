<?php declare(strict_types = 1);

namespace DemoApp\Ingredient\Api;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class PostIngredient
{
	public function __invoke(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
	{
		// TODO feature: (orm, design) create ingredient according to user input
		return $response;
	}
}
