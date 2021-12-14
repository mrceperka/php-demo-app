<?php declare(strict_types = 1);

namespace DemoApp\Ingredient\Api;

use Slim\Interfaces\RouteCollectorProxyInterface;

final class IngredientRouteGroup
{
	private GetIngredient $get;
	private PostRandomIngredient $random;
	private PostIngredient $post;
	private PostIngredientBatch $postBatch;
	
	public function __construct(
		GetIngredient $get,
		PostRandomIngredient $random,
		PostIngredient $post,
		PostIngredientBatch $postBatch
	)
	{
		$this->get = $get;
		$this->random = $random;
		$this->post = $post;
		$this->postBatch = $postBatch;
	}
	
	public function __invoke(RouteCollectorProxyInterface $proxy): void
	{
		$proxy->get('/{id:[0-9]+}', $this->get);
		$proxy->post('/create-random', $this->random);
		$proxy->post('[/]', $this->post);
		$proxy->post('/batch', $this->postBatch);
	}
}
