<?php declare(strict_types = 1);

namespace DemoApp\Recipe\Model\Entity;

use Nextras\Orm\Entity\Entity;

/**
 * @property int    $id     {primary}
 * @property float  $amount
 * @property string $unit
 *
 * TODO feature: (orm) create relation between ingredient and recipe ingredient
 * @property Recipe $recipe {1:m Recipe::$ingredients}
 */
class RecipeIngredient extends Entity
{
}
