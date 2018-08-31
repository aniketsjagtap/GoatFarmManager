<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MedicalHistory Entity
 *
 * @property int $id
 * @property int $farm_id
 * @property int $animal_id
 * @property string $date
 * @property string $doctor_name
 * @property string $description
 * @property int $vaccinationType_id
 * @property string $disease_name
 * @property string $prescription
 * @property string $symptoms
 * @property string $medication
 * @property string $result
 * @property string $duration
 * @property float $fees
 *
 * @property \App\Model\Entity\Farm $farm
 * @property \App\Model\Entity\Animal $animal
 * @property \App\Model\Entity\VaccinationType $vaccination_type
 */
class MedicalHistory extends Entity
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
        'date' => true,
        'doctor_name' => true,
        'description' => true,
        'vaccinationType_id' => true,
        'disease_name' => true,
        'prescription' => true,
        'symptoms' => true,
        'medication' => true,
        'result' => true,
        'duration' => true,
        'fees' => true,
        'farm' => true,
        'animal' => true,
        'vaccination_type' => true
    ];
}
