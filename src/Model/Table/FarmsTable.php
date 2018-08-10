<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Farms Model
 *
 * @property \App\Model\Table\StatusesTable|\Cake\ORM\Association\BelongsTo $Statuses
 * @property \App\Model\Table\LicensesTable|\Cake\ORM\Association\BelongsTo $Licenses
 * @property \App\Model\Table\AnimalItemsTable|\Cake\ORM\Association\HasMany $AnimalItems
 * @property \App\Model\Table\AnimalWeightsTable|\Cake\ORM\Association\HasMany $AnimalWeights
 * @property \App\Model\Table\AnimalsTable|\Cake\ORM\Association\HasMany $Animals
 * @property \App\Model\Table\BreedingsTable|\Cake\ORM\Association\HasMany $Breedings
 * @property \App\Model\Table\ExpenseTypesTable|\Cake\ORM\Association\HasMany $ExpenseTypes
 * @property \App\Model\Table\ExpensesTable|\Cake\ORM\Association\HasMany $Expenses
 * @property \App\Model\Table\IncomeTypesTable|\Cake\ORM\Association\HasMany $IncomeTypes
 * @property \App\Model\Table\IncomesTable|\Cake\ORM\Association\HasMany $Incomes
 * @property \App\Model\Table\ItemsTable|\Cake\ORM\Association\HasMany $Items
 * @property \App\Model\Table\MedicalHistoriesTable|\Cake\ORM\Association\HasMany $MedicalHistories
 * @property \App\Model\Table\MilkCollectionsTable|\Cake\ORM\Association\HasMany $MilkCollections
 * @property \App\Model\Table\PurchasesTable|\Cake\ORM\Association\HasMany $Purchases
 * @property \App\Model\Table\TransactionsTable|\Cake\ORM\Association\HasMany $Transactions
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\HasMany $Users
 * @property \App\Model\Table\VaccinationsTable|\Cake\ORM\Association\HasMany $Vaccinations
 *
 * @method \App\Model\Entity\Farm get($primaryKey, $options = [])
 * @method \App\Model\Entity\Farm newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Farm[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Farm|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Farm|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Farm patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Farm[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Farm findOrCreate($search, callable $callback = null, $options = [])
 */
class FarmsTable extends Table
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

        $this->setTable('farms');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Statuses', [
            'foreignKey' => 'status_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Licenses', [
            'foreignKey' => 'license_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('AnimalItems', [
            'foreignKey' => 'farm_id'
        ]);
        $this->hasMany('AnimalWeights', [
            'foreignKey' => 'farm_id'
        ]);
        $this->hasMany('Animals', [
            'foreignKey' => 'farm_id'
        ]);
        $this->hasMany('Breedings', [
            'foreignKey' => 'farm_id'
        ]);
        $this->hasMany('ExpenseTypes', [
            'foreignKey' => 'farm_id'
        ]);
        $this->hasMany('Expenses', [
            'foreignKey' => 'farm_id'
        ]);
        $this->hasMany('IncomeTypes', [
            'foreignKey' => 'farm_id'
        ]);
        $this->hasMany('Incomes', [
            'foreignKey' => 'farm_id'
        ]);
        $this->hasMany('Items', [
            'foreignKey' => 'farm_id'
        ]);
        $this->hasMany('MedicalHistories', [
            'foreignKey' => 'farm_id'
        ]);
        $this->hasMany('MilkCollections', [
            'foreignKey' => 'farm_id'
        ]);
        $this->hasMany('Purchases', [
            'foreignKey' => 'farm_id'
        ]);
        $this->hasMany('Transactions', [
            'foreignKey' => 'farm_id'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'farm_id'
        ]);
        $this->hasMany('Vaccinations', [
            'foreignKey' => 'farm_id'
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmpty('name')
			->add('name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);


        $validator
            ->integer('live_stock')
            ->requirePresence('live_stock', 'create')
            ->allowEmpty('live_stock');

        $validator
            ->integer('animal_limit')
            ->requirePresence('animal_limit', 'create')
            ->allowEmpty('animal_limit');

        $validator
            ->scalar('address')
            ->maxLength('address', 1000)
            ->requirePresence('address', 'create')
            ->allowEmpty('address');

        $validator
            ->scalar('gstin')
            ->maxLength('gstin', 255)
            ->requirePresence('gstin', 'create')
            ->allowEmpty('gstin');

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
        $rules->add($rules->existsIn(['status_id'], 'Statuses'));
        $rules->add($rules->existsIn(['license_id'], 'Licenses'));

        return $rules;
    }
}
