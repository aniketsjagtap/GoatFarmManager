<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AnimalItems Model
 *
 * @property \App\Model\Table\FarmsTable|\Cake\ORM\Association\BelongsTo $Farms
 * @property \App\Model\Table\AnimalsTable|\Cake\ORM\Association\BelongsTo $Animals
 * @property \App\Model\Table\ItemsTable|\Cake\ORM\Association\BelongsTo $Items
 *
 * @method \App\Model\Entity\AnimalItem get($primaryKey, $options = [])
 * @method \App\Model\Entity\AnimalItem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AnimalItem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AnimalItem|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AnimalItem|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AnimalItem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AnimalItem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AnimalItem findOrCreate($search, callable $callback = null, $options = [])
 */
class AnimalItemsTable extends Table
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

        $this->setTable('animal_items');
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
        $this->belongsTo('Items', [
            'foreignKey' => 'item_id',
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
            ->integer('animal_tag')
            ->requirePresence('animal_tag', 'create')
            ->notEmpty('animal_tag');

        $validator
            ->scalar('quantity')
            ->maxLength('quantity', 11)
            ->requirePresence('quantity', 'create')
            ->notEmpty('quantity');

        $validator
            ->scalar('date')
            ->maxLength('date', 255)
            ->requirePresence('date', 'create')
            ->notEmpty('date');

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
        $rules->add($rules->existsIn(['item_id'], 'Items'));

        return $rules;
    }
}
