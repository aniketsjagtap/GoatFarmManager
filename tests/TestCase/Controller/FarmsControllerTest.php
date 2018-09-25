<?php
namespace App\Test\TestCase\Controller;

use App\Controller\FarmsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\FarmsController Test Case
 */
class FarmsControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
