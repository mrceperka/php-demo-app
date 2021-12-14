<?php declare(strict_types = 1);

namespace DemoApp\Recipe\Model\Entity;

use Nextras\Orm\Entity\Entity;

/**
 * @property int      $id     {primary}
 * @property string   $title
 * @property string   $description
 * @property int|null $estimatedPreparationTime
 * @property int      $servings
 *
 * @property Recipe   $recipe {1:m Recipe::$steps}
 */
class RecipeStep extends Entity
{
}
