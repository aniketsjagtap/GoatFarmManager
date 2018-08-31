<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Permission Entity
 *
 * @property int $id
 * @property string $permission_description
 *
 * @property \App\Model\Entity\PersonPermission[] $person_permissions
 * @property \App\Model\Entity\RolePermission[] $role_permissions
 */
class Permission extends Entity
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
        'permission_description' => true,
        'person_permissions' => true,
        'role_permissions' => true
    ];
}
