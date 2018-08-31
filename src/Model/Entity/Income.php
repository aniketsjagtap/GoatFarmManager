<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Income Entity
 *
 * @property int $id
 * @property int $incomeType_id
 * @property int $farm_id
 * @property string $location
 * @property float $price
 * @property string $description
 * @property string $date
 *
 * @property \App\Model\Entity\IncomeType $income_type
 * @property \App\Model\Entity\Farm $farm
 */
class Income extends Entity
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
        'incomeType_id' => true,
        'farm_id' => true,
        'location' => true,
        'price' => true,
        'description' => true,
        'date' => true,
        'income_type' => true,
        'farm' => true
    ];
}
