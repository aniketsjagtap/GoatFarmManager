<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Item Entity
 *
 * @property int $id
 * @property string $name
 * @property int $farm_id
 * @property string $description
 *
 * @property \App\Model\Entity\Farm $farm
 * @property \App\Model\Entity\AnimalItem[] $animal_items
 * @property \App\Model\Entity\Purchase[] $purchases
 */
class Item extends Entity
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
        'farm' => true,
        'animal_items' => true,
        'purchases' => true
    ];
}
