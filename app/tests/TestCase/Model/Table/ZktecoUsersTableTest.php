<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZktecoUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZktecoUsersTable Test Case
 */
class ZktecoUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ZktecoUsersTable
     */
    public $ZktecoUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ZktecoUsers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ZktecoUsers') ? [] : ['className' => ZktecoUsersTable::class];
        $this->ZktecoUsers = TableRegistry::getTableLocator()->get('ZktecoUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ZktecoUsers);

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
