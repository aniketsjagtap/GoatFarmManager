<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\FarmsTable|\Cake\ORM\Association\BelongsTo $Farms
 * @property \App\Model\Table\RolesTable|\Cake\ORM\Association\BelongsTo $Roles
 * @property \App\Model\Table\StatusesTable|\Cake\ORM\Association\BelongsTo $Statuses
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Farms', [
            'foreignKey' => 'farm_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id'
        ]);
        $this->belongsTo('Statuses', [
            'foreignKey' => 'status_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('username')
            ->maxLength('username', 50)
            // ->requirePresence('username', 'create')
            ->allowEmpty('username');
           // ->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 50)
            ->notEmpty('first_name');

        $validator
            ->scalar('Last_name')
            ->maxLength('Last_name', 50)
            ->allowEmpty('Last_name');

        $validator
            ->scalar('middle_name')
            ->maxLength('middle_name', 50)
            ->allowEmpty('middle_name');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 10)
            ->notEmpty('gender');

        $validator
            ->scalar('mobile')
            ->maxLength('mobile', 15)
            ->allowEmpty('mobile');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email')	
			->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('registered')
            ->maxLength('registered', 11)
            ->allowEmpty('registered');

        return $validator;
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
        //$rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['farm_id'], 'Farms'));
       // $rules->add($rules->existsIn(['role_id'], 'Roles'));
      //  $rules->add($rules->existsIn(['status_id'], 'Statuses'));

        return $rules;
    }
}
