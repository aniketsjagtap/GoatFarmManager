<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Breeding Entity
 *
 * @property int $id
 * @property int $farm_id
 * @property int $femaleAnimal_id
 * @property int $maleAnimal_id
 * @property int $semenBreedType_id
 * @property string $date
 * @property string $location
 * @property int $gestation_days
 * @property string $delivery_date
 * @property string $description
 *
 * @property \App\Model\Entity\Farm $farm
 */
class Breeding extends Entity
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
        'id' => true,
        'farm_id' => true,
        'femaleAnimal_id' => true,
        'maleAnimal_id' => true,
        'semenBreedType_id' => true,
        'date' => true,
        'location' => true,
        'gestation_days' => true,
        'delivery_date' => true,
        'description' => true,
        'farm' => true
    ];
}
