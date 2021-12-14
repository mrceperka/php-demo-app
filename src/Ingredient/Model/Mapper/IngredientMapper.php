<?php declare(strict_types = 1);

namespace DemoApp\Ingredient\Model\Mapper;

use Nextras\Orm\Mapper\Mapper;

class IngredientMapper extends Mapper
{
	public function getTableName(): string
	{
		return 'ingredient';
	}
}
