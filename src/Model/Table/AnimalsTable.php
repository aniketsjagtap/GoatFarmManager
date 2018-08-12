<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Animals Model
 *
 * @property \App\Model\Table\FarmsTable|\Cake\ORM\Association\BelongsTo $Farms
 * @property \App\Model\Table\BreedTypesTable|\Cake\ORM\Association\BelongsTo $BreedTypes
 * @property \App\Model\Table\AnimalTypesTable|\Cake\ORM\Association\BelongsTo $AnimalTypes
 * @property \App\Model\Table\AnimalWeightsTable|\Cake\ORM\Association\BelongsTo $AnimalWeights
 * @property \App\Model\Table\MaleParentBreedTypesTable|\Cake\ORM\Association\BelongsTo $MaleParentBreedTypes
 * @property \App\Model\Table\FemaleParentBreedTypesTable|\Cake\ORM\Association\BelongsTo $FemaleParentBreedTypes
 * @property \App\Model\Table\StatusesTable|\Cake\ORM\Association\BelongsTo $Statuses
 * @property \App\Model\Table\AnimalItemsTable|\Cake\ORM\Association\HasMany $AnimalItems
 * @property \App\Model\Table\AnimalWeightsTable|\Cake\ORM\Association\HasMany $AnimalWeights
 * @property \App\Model\Table\MedicalHistoriesTable|\Cake\ORM\Association\HasMany $MedicalHistories
 * @property \App\Model\Table\MilkCollectionsTable|\Cake\ORM\Association\HasMany $MilkCollections
 *
 * @method \App\Model\Entity\Animal get($primaryKey, $options = [])
 * @method \App\Model\Entity\Animal newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Animal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Animal|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Animal|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Animal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Animal[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Animal findOrCreate($search, callable $callback = null, $options = [])
 */
class AnimalsTable extends Table
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

        $this->setTable('animals');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Farms', [
            'foreignKey' => 'farm_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('BreedTypes', [
            'foreignKey' => 'breedType_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('AnimalTypes', [
            'foreignKey' => 'animalType_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('AnimalWeights', [
            'foreignKey' => 'animalWeight_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('MaleParentBreedTypes', [
            'foreignKey' => 'maleParentBreedType_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('FemaleParentBreedTypes', [
            'foreignKey' => 'femaleParentBreedType_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Statuses', [
            'foreignKey' => 'status_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('AnimalItems', [
            'foreignKey' => 'animal_id'
        ]);
        $this->hasMany('AnimalWeights', [
            'foreignKey' => 'animal_id'
        ]);
        $this->hasMany('MedicalHistories', [
            'foreignKey' => 'animal_id'
        ]);
        $this->hasMany('MilkCollections', [
            'foreignKey' => 'animal_id'
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
            ->scalar('tag')
            ->maxLength('tag', 255)
            ->requirePresence('tag', 'create')
            ->notEmpty('tag');

        $validator
            ->scalar('dob')
            ->maxLength('dob', 20)
            ->requirePresence('dob', 'create')
            ->notEmpty('dob');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 10)
            ->requirePresence('gender', 'create')
            ->notEmpty('gender');

        $validator
            ->scalar('date_wean')
            ->maxLength('date_wean', 20)
            ->requirePresence('date_wean', 'create')
            ->notEmpty('date_wean');

        $validator
            ->requirePresence('maleParent_tag', 'create')
            ->notEmpty('maleParent_tag');

        $validator
            ->requirePresence('femaleParent_tag', 'create')
            ->notEmpty('femaleParent_tag');

        $validator
            ->numeric('maleParent_percentage')
            ->requirePresence('maleParent_percentage', 'create')
            ->notEmpty('maleParent_percentage');

        $validator
            ->numeric('femaleParent_percentage')
            ->requirePresence('femaleParent_percentage', 'create')
            ->notEmpty('femaleParent_percentage');

        $validator
            ->scalar('purchase_location')
            ->maxLength('purchase_location', 1000)
            ->requirePresence('purchase_location', 'create')
            ->notEmpty('purchase_location');

        $validator
            ->scalar('colour')
            ->maxLength('colour', 20)
            ->requirePresence('colour', 'create')
            ->notEmpty('colour');

        $validator
            ->scalar('birth_location')
            ->maxLength('birth_location', 1000)
            ->requirePresence('birth_location', 'create')
            ->notEmpty('birth_location');

        $validator
            ->scalar('birth_ease')
            ->maxLength('birth_ease', 255)
            ->requirePresence('birth_ease', 'create')
            ->notEmpty('birth_ease');

        $validator
            ->scalar('sales_date')
            ->maxLength('sales_date', 255)
            ->requirePresence('sales_date', 'create')
            ->notEmpty('sales_date');

        $validator
            ->numeric('sales_weight')
            ->requirePresence('sales_weight', 'create')
            ->notEmpty('sales_weight');

        $validator
            ->numeric('sales_price')
            ->requirePresence('sales_price', 'create')
            ->notEmpty('sales_price');

        $validator
            ->scalar('death_date')
            ->maxLength('death_date', 255)
            ->requirePresence('death_date', 'create')
            ->notEmpty('death_date');

        $validator
            ->scalar('death_reason')
            ->maxLength('death_reason', 1000)
            ->requirePresence('death_reason', 'create')
            ->notEmpty('death_reason');

        $validator
            ->numeric('purchase_price')
            ->requirePresence('purchase_price', 'create')
            ->notEmpty('purchase_price');

        $validator
            ->scalar('purchase_date')
            ->maxLength('purchase_date', 255)
            ->requirePresence('purchase_date', 'create')
            ->notEmpty('purchase_date');

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
        $rules->add($rules->existsIn(['breedType_id'], 'BreedTypes'));
        $rules->add($rules->existsIn(['animalType_id'], 'AnimalTypes'));
        $rules->add($rules->existsIn(['animalWeight_id'], 'AnimalWeights'));
        $rules->add($rules->existsIn(['maleParentBreedType_id'], 'MaleParentBreedTypes'));
        $rules->add($rules->existsIn(['femaleParentBreedType_id'], 'FemaleParentBreedTypes'));
        $rules->add($rules->existsIn(['status_id'], 'Statuses'));

        return $rules;
    }
}
