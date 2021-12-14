<?php declare(strict_types = 1);

namespace DemoApp\Recipe\Model\Entity;

use Nextras\Orm\Entity\Entity;
use Nextras\Orm\Relationships\OneHasMany;

/**
 * @property int                     $id    {primary}
 * @property string                  $name
 * @property string|null             $description
 * @property int                     $estimatedPreparationTime
 *
 * TODO feature: (orm) create relation between recipe and ingredients
 * @property OneHasMany|RecipeStep[] $steps {m:1 RecipeStep::$recipe}
 */
class Recipe extends Entity
{
}
