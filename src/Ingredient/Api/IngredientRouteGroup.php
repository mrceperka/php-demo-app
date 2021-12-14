<?php declare(strict_types = 1);

namespace DemoApp\Ingredient\Api;

use Slim\Interfaces\RouteCollectorProxyInterface;

final class IngredientRouteGroup
{
	private GetIngredient $get;
	
	public function __construct(GetIngredient $get)
	{
		$this->get = $get;
	}
	
	public function __invoke(RouteCollectorProxyInterface $proxy): void
	{
		$proxy->get('/{id:[0-9]+}', $this->get);
	}
}
