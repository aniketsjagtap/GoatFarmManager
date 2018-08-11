<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Farm Entity
 *
 * @property int $id
 * @property string $name
 * @property int $live_stock
 * @property int $animal_limit
 * @property string $address
 * @property string $gstin
 * @property int $status_id
 * @property int $license_id
 *
 * @property \App\Model\Entity\Status $status
 * @property \App\Model\Entity\License $license
 * @property \App\Model\Entity\AnimalItem[] $animal_items
 * @property \App\Model\Entity\AnimalWeight[] $animal_weights
 * @property \App\Model\Entity\Animal[] $animals
 * @property \App\Model\Entity\Breeding[] $breedings
 * @property \App\Model\Entity\ExpenseType[] $expense_types
 * @property \App\Model\Entity\Expense[] $expenses
 * @property \App\Model\Entity\IncomeType[] $income_types
 * @property \App\Model\Entity\Income[] $incomes
 * @property \App\Model\Entity\Item[] $items
 * @property \App\Model\Entity\MedicalHistory[] $medical_histories
 * @property \App\Model\Entity\MilkCollection[] $milk_collections
 * @property \App\Model\Entity\Purchase[] $purchases
 * @property \App\Model\Entity\Transaction[] $transactions
 * @property \App\Model\Entity\User[] $users
 * @property \App\Model\Entity\Vaccination[] $vaccinations
 */
class Farm extends Entity
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
        'live_stock' => true,
        'animal_limit' => true,
        'address' => true,
        'gstin' => true,
        'status_id' => true,
        'license_id' => true,
        'status' => true,
        'license' => true,
        'animal_items' => true,
        'animal_weights' => true,
        'animals' => true,
        'breedings' => true,
        'expense_types' => true,
        'expenses' => true,
        'income_types' => true,
        'incomes' => true,
        'items' => true,
        'medical_histories' => true,
        'milk_collections' => true,
        'purchases' => true,
        'transactions' => true,
        'users' => true,
        'vaccinations' => true
    ];
}
