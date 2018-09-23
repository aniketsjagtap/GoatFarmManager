<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FarmsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FarmsTable Test Case
 */
class FarmsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FarmsTable
     */
    public $Farms;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.farms',
        'app.statuses',
        'app.licenses',
        'app.animal_items',
        'app.animal_weights',
        'app.animals',
        'app.breedings',
        'app.expense_types',
        'app.expenses',
        'app.income_types',
        'app.incomes',
        'app.items',
        'app.medical_histories',
        'app.milk_collections',
        'app.purchases',
        'app.transactions',
        'app.users',
        'app.vaccinations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Farms') ? [] : ['className' => FarmsTable::class];
        $this->Farms = TableRegistry::getTableLocator()->get('Farms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Farms);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
