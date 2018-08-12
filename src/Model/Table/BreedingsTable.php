<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Breedings Model
 *
 * @property \App\Model\Table\FarmsTable|\Cake\ORM\Association\BelongsTo $Farms
 * @property |\Cake\ORM\Association\BelongsTo $FemaleAnimals
 * @property |\Cake\ORM\Association\BelongsTo $MaleAnimals
 * @property |\Cake\ORM\Association\BelongsTo $SemenBreedTypes
 *
 * @method \App\Model\Entity\Breeding get($primaryKey, $options = [])
 * @method \App\Model\Entity\Breeding newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Breeding[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Breeding|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Breeding|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Breeding patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Breeding[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Breeding findOrCreate($search, callable $callback = null, $options = [])
 */
class BreedingsTable extends Table
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

        $this->setTable('breedings');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Farms', [
            'foreignKey' => 'farm_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('FemaleAnimals', [
            'foreignKey' => 'femaleAnimal_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('MaleAnimals', [
            'foreignKey' => 'maleAnimal_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('SemenBreedTypes', [
            'foreignKey' => 'semenBreedType_id',
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
            ->requirePresence('id', 'create')
            ->notEmpty('id');

        $validator
            ->scalar('date')
            ->maxLength('date', 255)
            ->requirePresence('date', 'create')
            ->notEmpty('date');

        $validator
            ->scalar('location')
            ->maxLength('location', 255)
            ->requirePresence('location', 'create')
            ->notEmpty('location');

        $validator
            ->integer('gestation_days')
            ->requirePresence('gestation_days', 'create')
            ->notEmpty('gestation_days');

        $validator
            ->scalar('delivery_date')
            ->maxLength('delivery_date', 11)
            ->requirePresence('delivery_date', 'create')
            ->notEmpty('delivery_date');

        $validator
            ->scalar('description')
            ->maxLength('description', 1000)
            ->allowEmpty('description');

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
        $rules->add($rules->existsIn(['femaleAnimal_id'], 'FemaleAnimals'));
        $rules->add($rules->existsIn(['maleAnimal_id'], 'MaleAnimals'));
        $rules->add($rules->existsIn(['semenBreedType_id'], 'SemenBreedTypes'));

        return $rules;
    }
}
