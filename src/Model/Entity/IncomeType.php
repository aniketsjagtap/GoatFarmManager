<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * IncomeType Entity
 *
 * @property int $id
 * @property string $name
 * @property int $farm_id
 * @property string $description
 *
 * @property \App\Model\Entity\Farm $farm
 */
class IncomeType extends Entity
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
        'name' => true,
        'farm_id' => true,
        'description' => true,
        'farm' => true
    ];
}
