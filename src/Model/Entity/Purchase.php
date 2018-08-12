<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Purchase Entity
 *
 * @property int $id
 * @property string $purchaseNumber
 * @property string $supplier_name
 * @property int $item_id
 * @property float $quantity
 * @property int $unit_id
 * @property float $price
 * @property string $date
 * @property int $farm_id
 * @property string $description
 * @property string $location
 *
 * @property \App\Model\Entity\Item $item
 * @property \App\Model\Entity\Unit $unit
 * @property \App\Model\Entity\Farm $farm
 */
class Purchase extends Entity
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
        'purchaseNumber' => true,
        'supplier_name' => true,
        'item_id' => true,
        'quantity' => true,
        'unit_id' => true,
        'price' => true,
        'date' => true,
        'farm_id' => true,
        'description' => true,
        'location' => true,
        'item' => true,
        'unit' => true,
        'farm' => true
    ];
}
