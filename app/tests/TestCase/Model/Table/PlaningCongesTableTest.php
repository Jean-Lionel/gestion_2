<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PlaningCongesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PlaningCongesTable Test Case
 */
class PlaningCongesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PlaningCongesTable
     */
    public $PlaningConges;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PlaningConges',
        'app.Employes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PlaningConges') ? [] : ['className' => PlaningCongesTable::class];
        $this->PlaningConges = TableRegistry::getTableLocator()->get('PlaningConges', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PlaningConges);

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
