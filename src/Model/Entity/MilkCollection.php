<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MilkCollection Entity
 *
 * @property int $id
 * @property int $farm_id
 * @property int $animal_id
 * @property float $quantity
 * @property float $price
 * @property string $date
 * @property string $description
 * @property int $unit
 *
 * @property \App\Model\Entity\Farm $farm
 * @property \App\Model\Entity\Animal $animal
 */
class MilkCollection extends Entity
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
        'quantity' => true,
        'price' => true,
        'date' => true,
        'description' => true,
        'unit' => true,
        'farm' => true,
        'animal' => true
    ];
}
