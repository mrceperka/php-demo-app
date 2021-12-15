<?php declare(strict_types = 1);

namespace DemoApp\Tests\Functional\Ingredient\Service;

use DemoApp\Ingredient\Model\Repository\IngredientRepository;
use DemoApp\Ingredient\Service\IngredientService;
use Helper\Functional;

class IngredientServiceCest
{
	private IngredientService $service;
	private IngredientRepository $ingredientRepository;
	
	public function __construct()
	{
		$this->service = Functional::di()->getByType(IngredientService::class);
		$this->ingredientRepository = Functional::di()->getByType(IngredientRepository::class);
	}
	
	public function testCreate(\FunctionalTester $I):void
	{
		$ingredient = $this->service->create('test');
		$I->assertEquals('test', $ingredient->name);
	}
	
	public function testDelete(\FunctionalTester $I):void
	{
		$ingredient = $this->service->create('test');
		$id = $ingredient->id;
		
		$this->service->delete($ingredient);
		$I->assertEquals(null, $this->ingredientRepository->getBy(['id' => $id]));
	}
}
