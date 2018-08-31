<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vaccination Entity
 *
 * @property int $id
 * @property int $farm_id
 * @property int $vaccinationType_id
 * @property string $next_date
 * @property string $description
 *
 * @property \App\Model\Entity\Farm $farm
 * @property \App\Model\Entity\VaccinationType $vaccination_type
 */
class Vaccination extends Entity
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
        'vaccinationType_id' => true,
        'next_date' => true,
        'description' => true,
        'farm' => true,
        'vaccination_type' => true
    ];
}
