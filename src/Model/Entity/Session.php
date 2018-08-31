<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Session Entity
 *
 * @property string $id
 * @property string $ip_address
 * @property string $timestamp
 * @property string $user_agent
 * @property int $last_activity
 * @property string $data
 */
class Session extends Entity
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
        'ip_address' => true,
        'timestamp' => true,
        'user_agent' => true,
        'last_activity' => true,
        'data' => true
    ];
}
