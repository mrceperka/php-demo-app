<?php declare(strict_types = 1);

namespace DemoApp\Ingredient\Service;

use DemoApp\Ingredient\Model\Entity\Ingredient;
use DemoApp\Ingredient\Model\Repository\IngredientRepository;

final class IngredientService
{
	private IngredientRepository $ingredientRepository;
	
	public function __construct(IngredientRepository $ingredientRepository)
	{
		$this->ingredientRepository = $ingredientRepository;
	}
	
	public function create(string $name): Ingredient
	{
		$ingredient = new Ingredient($name);
		
		return $this->ingredientRepository->persistAndFlush($ingredient);
	}
	
	// TODO feature: (orm) update ingredient
	public function update(Ingredient $ingredient, string $name): Ingredient
	{
		throw new \LogicException('TODO');
	}
	
	public function delete(Ingredient $ingredient): void
	{
		$this->ingredientRepository->removeAndFlush($ingredient);
	}
}
