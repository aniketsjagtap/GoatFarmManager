<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Person Entity
 *
 * @property int $id
 * @property int $role_id
 * @property string $username
 * @property string $password
 * @property string $first_name
 * @property string $Last_name
 * @property string $middle_name
 * @property string $gender
 * @property string $mobile
 * @property string $email
 * @property string $registered
 * @property int $status_id
 * @property int $farm_id
 * @property int $license_id
 *
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Status $status
 * @property \App\Model\Entity\Farm $farm
 * @property \App\Model\Entity\License $license
 * @property \App\Model\Entity\PersonPermission[] $person_permissions
 */
class Person extends Entity
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
        'role_id' => true,
        'username' => true,
        'password' => true,
        'first_name' => true,
        'Last_name' => true,
        'middle_name' => true,
        'gender' => true,
        'mobile' => true,
        'email' => true,
        'registered' => true,
        'status_id' => true,
        'farm_id' => true,
        'license_id' => true,
        'role' => true,
        'status' => true,
        'farm' => true,
        'license' => true,
        'person_permissions' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
