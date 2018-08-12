<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ExpenseType Entity
 *
 * @property int $id
 * @property int $farm_id
 * @property string $name
 * @property string $description
 *
 * @property \App\Model\Entity\Farm $farm
 */
class ExpenseType extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'farm_id' => true,
        'name' => true,
        'description' => true,
        'farm' => true
    ];
}
