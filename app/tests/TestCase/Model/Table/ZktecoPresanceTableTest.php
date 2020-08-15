<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZktecoPresanceTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZktecoPresanceTable Test Case
 */
class ZktecoPresanceTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ZktecoPresanceTable
     */
    public $ZktecoPresance;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ZktecoPresance',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ZktecoPresance') ? [] : ['className' => ZktecoPresanceTable::class];
        $this->ZktecoPresance = TableRegistry::getTableLocator()->get('ZktecoPresance', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ZktecoPresance);

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
