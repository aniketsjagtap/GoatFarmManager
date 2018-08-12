<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AnimalWeight Entity
 *
 * @property int $id
 * @property int $farm_id
 * @property float $weight
 * @property string $description
 * @property string $date
 * @property int $animal_id
 *
 * @property \App\Model\Entity\Farm $farm
 * @property \App\Model\Entity\Animal $animal
 */
class AnimalWeight extends Entity
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
        'weight' => true,
        'description' => true,
        'date' => true,
        'animal_id' => true,
        'farm' => true,
        'animal' => true
    ];
}
