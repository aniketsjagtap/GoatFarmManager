<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MedicalHistories Model
 *
 * @property \App\Model\Table\FarmsTable|\Cake\ORM\Association\BelongsTo $Farms
 * @property \App\Model\Table\AnimalsTable|\Cake\ORM\Association\BelongsTo $Animals
 * @property \App\Model\Table\VaccinationTypesTable|\Cake\ORM\Association\BelongsTo $VaccinationTypes
 *
 * @method \App\Model\Entity\MedicalHistory get($primaryKey, $options = [])
 * @method \App\Model\Entity\MedicalHistory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MedicalHistory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MedicalHistory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MedicalHistory|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MedicalHistory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MedicalHistory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MedicalHistory findOrCreate($search, callable $callback = null, $options = [])
 */
class MedicalHistoriesTable extends Table
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

        $this->setTable('medical_histories');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Farms', [
            'foreignKey' => 'farm_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Animals', [
            'foreignKey' => 'animal_id',
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
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('date')
            ->maxLength('date', 255)
            ->requirePresence('date', 'create')
            ->notEmpty('date');

        $validator
            ->scalar('doctor_name')
            ->maxLength('doctor_name', 255)
            ->requirePresence('doctor_name', 'create')
            ->notEmpty('doctor_name');

        $validator
            ->scalar('description')
            ->maxLength('description', 1000)
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->scalar('disease_name')
            ->maxLength('disease_name', 255)
            ->requirePresence('disease_name', 'create')
            ->notEmpty('disease_name');

        $validator
            ->scalar('prescription')
            ->maxLength('prescription', 100)
            ->requirePresence('prescription', 'create')
            ->notEmpty('prescription');

        $validator
            ->scalar('symptoms')
            ->maxLength('symptoms', 1000)
            ->requirePresence('symptoms', 'create')
            ->notEmpty('symptoms');

        $validator
            ->scalar('medication')
            ->maxLength('medication', 1000)
            ->requirePresence('medication', 'create')
            ->notEmpty('medication');

        $validator
            ->scalar('result')
            ->maxLength('result', 1000)
            ->requirePresence('result', 'create')
            ->notEmpty('result');

        $validator
            ->scalar('duration')
            ->maxLength('duration', 255)
            ->requirePresence('duration', 'create')
            ->notEmpty('duration');

        $validator
            ->numeric('fees')
            ->requirePresence('fees', 'create')
            ->notEmpty('fees');

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
        $rules->add($rules->existsIn(['animal_id'], 'Animals'));
        $rules->add($rules->existsIn(['vaccinationType_id'], 'VaccinationTypes'));

        return $rules;
    }
}
