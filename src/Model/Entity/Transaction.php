<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transaction Entity
 *
 * @property int $id
 * @property int $farm_id
 * @property int $license_id
 * @property string $date
 *
 * @property \App\Model\Entity\Farm $farm
 * @property \App\Model\Entity\License $license
 */
class Transaction extends Entity
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
        'license_id' => true,
        'date' => true,
        'farm' => true,
        'license' => true
    ];
}
