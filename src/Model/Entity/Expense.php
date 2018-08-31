<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Expense Entity
 *
 * @property int $id
 * @property int $expenseType_id
 * @property int $farm_id
 * @property string $location
 * @property float $price
 * @property string $description
 * @property string $date
 *
 * @property \App\Model\Entity\ExpenseType $expense_type
 * @property \App\Model\Entity\Farm $farm
 */
class Expense extends Entity
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
        'expenseType_id' => true,
        'farm_id' => true,
        'location' => true,
        'price' => true,
        'description' => true,
        'date' => true,
        'expense_type' => true,
        'farm' => true
    ];
}
