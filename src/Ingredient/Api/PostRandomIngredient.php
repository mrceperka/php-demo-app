<?php declare(strict_types = 1);

namespace DemoApp\Ingredient\Api;

use DemoApp\Ingredient\Model\Entity\Ingredient;
use DemoApp\Ingredient\Model\Repository\IngredientRepository;
use GuzzleHttp\Psr7\Utils;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class PostRandomIngredient
{
	private IngredientRepository $ingredientRepository;
	
	public function __construct(IngredientRepository $ingredientRepository)
	{
		$this->ingredientRepository = $ingredientRepository;
	}
	
	public function __invoke(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
	{
		// TODO feature: (orm) make sure, that if this fails somehow, database will stay consistent
		$entity = new Ingredient(bin2hex('random-ingredient-' . random_bytes(10)));
		$entity = $this->ingredientRepository->persistAndFlush($entity);
		
		// TODO feature: (serde) better/cleaner serialization?
		return $response
			->withStatus(201)
			->withHeader('Content-Type', 'application/json')
			->withBody(
				Utils::streamFor(
					json_encode(
						[
							'id'   => $entity->id,
							'name' => $entity->name,
						]
					)
				)
			);
	}
}
