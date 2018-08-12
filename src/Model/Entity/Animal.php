<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Animal Entity
 *
 * @property int $id
 * @property int $farm_id
 * @property string $tag
 * @property string $dob
 * @property string $gender
 * @property int $breedType_id
 * @property int $animalType_id
 * @property string $date_wean
 * @property int $animalWeight_id
 * @property int $maleParent_tag
 * @property int $femaleParent_tag
 * @property float $maleParent_percentage
 * @property float $femaleParent_percentage
 * @property int $maleParentBreedType_id
 * @property int $femaleParentBreedType_id
 * @property string $purchase_location
 * @property string $colour
 * @property string $birth_location
 * @property string $birth_ease
 * @property string $sales_date
 * @property float $sales_weight
 * @property float $sales_price
 * @property string $death_date
 * @property string $death_reason
 * @property float $purchase_price
 * @property string $purchase_date
 * @property int $status_id
 * @property string $description
 *
 * @property \App\Model\Entity\Farm $farm
 * @property \App\Model\Entity\BreedType $breed_type
 * @property \App\Model\Entity\AnimalType $animal_type
 * @property \App\Model\Entity\AnimalWeight[] $animal_weights
 * @property \App\Model\Entity\MaleParentBreedType $male_parent_breed_type
 * @property \App\Model\Entity\FemaleParentBreedType $female_parent_breed_type
 * @property \App\Model\Entity\Status $status
 * @property \App\Model\Entity\AnimalItem[] $animal_items
 * @property \App\Model\Entity\MedicalHistory[] $medical_histories
 * @property \App\Model\Entity\MilkCollection[] $milk_collections
 */
class Animal extends Entity
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
        'tag' => true,
        'dob' => true,
        'gender' => true,
        'breedType_id' => true,
        'animalType_id' => true,
        'date_wean' => true,
        'animalWeight_id' => true,
        'maleParent_tag' => true,
        'femaleParent_tag' => true,
        'maleParent_percentage' => true,
        'femaleParent_percentage' => true,
        'maleParentBreedType_id' => true,
        'femaleParentBreedType_id' => true,
        'purchase_location' => true,
        'colour' => true,
        'birth_location' => true,
        'birth_ease' => true,
        'sales_date' => true,
        'sales_weight' => true,
        'sales_price' => true,
        'death_date' => true,
        'death_reason' => true,
        'purchase_price' => true,
        'purchase_date' => true,
        'status_id' => true,
        'description' => true,
        'farm' => true,
        'breed_type' => true,
        'animal_type' => true,
        'animal_weights' => true,
        'male_parent_breed_type' => true,
        'female_parent_breed_type' => true,
        'status' => true,
        'animal_items' => true,
        'medical_histories' => true,
        'milk_collections' => true
    ];
}
