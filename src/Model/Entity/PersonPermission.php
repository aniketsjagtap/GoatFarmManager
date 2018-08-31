<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PersonPermission Entity
 *
 * @property int $person_id
 * @property int $permission_id
 *
 * @property \App\Model\Entity\Person $person
 * @property \App\Model\Entity\Permission $permission
 */
class PersonPermission extends Entity
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
        'person_id' => true,
        'permission_id' => true,
        'person' => true,
        'permission' => true
    ];
}
