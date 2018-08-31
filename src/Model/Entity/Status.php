<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Status Entity
 *
 * @property int $id
 * @property string $name
 * @property int $value
 * @property string $description
 *
 * @property \App\Model\Entity\Animal[] $animals
 * @property \App\Model\Entity\Farm[] $farms
 * @property \App\Model\Entity\Person[] $persons
 */
class Status extends Entity
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
        'value' => true,
        'description' => true,
        'animals' => true,
        'farms' => true,
        'persons' => true
    ];
}
