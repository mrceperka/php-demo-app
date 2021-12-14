<?php declare(strict_types = 1);

namespace DemoApp\Ingredient\Model\Entity;

use Nextras\Orm\Entity\Entity;

/**
 * @property int    $id {primary}
 * @property string $name
 */
class Ingredient extends Entity
{
	public function __construct(string $name)
	{
		parent::__construct();
		$this->name = $name;
	}
}
