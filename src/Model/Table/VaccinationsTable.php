<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vaccinations Model
 *
 * @property \App\Model\Table\FarmsTable|\Cake\ORM\Association\BelongsTo $Farms
 * @property \App\Model\Table\VaccinationTypesTable|\Cake\ORM\Association\BelongsTo $VaccinationTypes
 *
 * @method \App\Model\Entity\Vaccination get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vaccination newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Vaccination[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vaccination|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vaccination|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vaccination patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vaccination[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vaccination findOrCreate($search, callable $callback = null, $options = [])
 */
class VaccinationsTable extends Table
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

        $this->setTable('vaccinations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Farms', [
            'foreignKey' => 'farm_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('VaccinationTypes', [
            'foreignKey' => 'vaccinationType_id',
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('next_date')
            ->maxLength('next_date', 255)
            ->requirePresence('next_date', 'create')
            ->notEmpty('next_date');

        $validator
            ->scalar('description')
            ->maxLength('description', 1000)
            ->requirePresence('description', 'create')
            ->notEmpty('description');

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
        $rules->add($rules->existsIn(['farm_id'], 'Farms'));
        $rules->add($rules->existsIn(['vaccinationType_id'], 'VaccinationTypes'));

        return $rules;
    }
}
