<?php declare(strict_types = 1);

namespace DemoApp\Ingredient\Model\Repository;

use DemoApp\Ingredient\Model\Entity\Ingredient;
use Nextras\Orm\Repository\Repository;

class IngredientRepository extends Repository
{
	public static function getEntityClassNames(): array
	{
		return [Ingredient::class];
	}
}
