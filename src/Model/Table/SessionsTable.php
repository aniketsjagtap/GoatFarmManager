<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sessions Model
 *
 * @method \App\Model\Entity\Session get($primaryKey, $options = [])
 * @method \App\Model\Entity\Session newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Session[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Session|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Session|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Session patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Session[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Session findOrCreate($search, callable $callback = null, $options = [])
 */
class SessionsTable extends Table
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

        $this->setTable('sessions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('id')
            ->maxLength('id', 40)
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('ip_address')
            ->maxLength('ip_address', 16)
            ->requirePresence('ip_address', 'create')
            ->notEmpty('ip_address');

        $validator
            ->scalar('timestamp')
            ->maxLength('timestamp', 15)
            ->requirePresence('timestamp', 'create')
            ->notEmpty('timestamp');

        $validator
            ->scalar('user_agent')
            ->maxLength('user_agent', 120)
            ->allowEmpty('user_agent');

        $validator
            ->integer('last_activity')
            ->requirePresence('last_activity', 'create')
            ->notEmpty('last_activity');

        $validator
            ->scalar('data')
            ->requirePresence('data', 'create')
            ->notEmpty('data');

        return $validator;
    }
}
