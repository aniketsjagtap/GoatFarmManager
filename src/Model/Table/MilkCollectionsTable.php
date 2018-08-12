<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MilkCollections Model
 *
 * @property \App\Model\Table\FarmsTable|\Cake\ORM\Association\BelongsTo $Farms
 * @property \App\Model\Table\AnimalsTable|\Cake\ORM\Association\BelongsTo $Animals
 *
 * @method \App\Model\Entity\MilkCollection get($primaryKey, $options = [])
 * @method \App\Model\Entity\MilkCollection newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MilkCollection[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MilkCollection|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MilkCollection|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MilkCollection patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MilkCollection[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MilkCollection findOrCreate($search, callable $callback = null, $options = [])
 */
class MilkCollectionsTable extends Table
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

        $this->setTable('milk_collections');
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
            ->numeric('quantity')
            ->requirePresence('quantity', 'create')
            ->notEmpty('quantity');

        $validator
            ->numeric('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        $validator
            ->scalar('date')
            ->maxLength('date', 255)
            ->requirePresence('date', 'create')
            ->notEmpty('date');

        $validator
            ->scalar('description')
            ->maxLength('description', 1000)
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->integer('unit')
            ->allowEmpty('unit');

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

        return $rules;
    }
}
