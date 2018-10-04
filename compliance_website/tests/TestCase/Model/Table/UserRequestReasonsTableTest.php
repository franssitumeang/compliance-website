<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserRequestReasonsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserRequestReasonsTable Test Case
 */
class UserRequestReasonsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserRequestReasonsTable
     */
    public $UserRequestReasons;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_request_reasons'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UserRequestReasons') ? [] : ['className' => UserRequestReasonsTable::class];
        $this->UserRequestReasons = TableRegistry::getTableLocator()->get('UserRequestReasons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserRequestReasons);

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
