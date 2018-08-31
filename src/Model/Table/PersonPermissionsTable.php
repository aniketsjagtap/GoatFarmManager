<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PersonPermissions Model
 *
 * @property \App\Model\Table\PeopleTable|\Cake\ORM\Association\BelongsTo $People
 * @property \App\Model\Table\PermissionsTable|\Cake\ORM\Association\BelongsTo $Permissions
 *
 * @method \App\Model\Entity\PersonPermission get($primaryKey, $options = [])
 * @method \App\Model\Entity\PersonPermission newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PersonPermission[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PersonPermission|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PersonPermission|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PersonPermission patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PersonPermission[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PersonPermission findOrCreate($search, callable $callback = null, $options = [])
 */
class PersonPermissionsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('person_permissions');

        $this->belongsTo('People', [
            'foreignKey' => 'person_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Permissions', [
            'foreignKey' => 'permission_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['person_id'], 'People'));
        $rules->add($rules->existsIn(['permission_id'], 'Permissions'));

        return $rules;
    }
}
