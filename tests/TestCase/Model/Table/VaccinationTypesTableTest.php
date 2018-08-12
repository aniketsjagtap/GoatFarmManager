<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VaccinationTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VaccinationTypesTable Test Case
 */
class VaccinationTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VaccinationTypesTable
     */
    public $VaccinationTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.vaccination_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('VaccinationTypes') ? [] : ['className' => VaccinationTypesTable::class];
        $this->VaccinationTypes = TableRegistry::getTableLocator()->get('VaccinationTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->VaccinationTypes);

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
}
