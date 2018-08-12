<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AnimalItem Entity
 *
 * @property int $id
 * @property int $farm_id
 * @property int $animal_id
 * @property int $animal_tag
 * @property int $item_id
 * @property string $quantity
 * @property string $date
 *
 * @property \App\Model\Entity\Farm $farm
 * @property \App\Model\Entity\Animal $animal
 * @property \App\Model\Entity\Item $item
 */
class AnimalItem extends Entity
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
        'animal_id' => true,
        'animal_tag' => true,
        'item_id' => true,
        'quantity' => true,
        'date' => true,
        'farm' => true,
        'animal' => true,
        'item' => true
    ];
}
