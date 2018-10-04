<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserDocApprovalsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserDocApprovalsTable Test Case
 */
class UserDocApprovalsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserDocApprovalsTable
     */
    public $UserDocApprovals;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_doc_approvals',
        'app.users',
        'app.user_request_headers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UserDocApprovals') ? [] : ['className' => UserDocApprovalsTable::class];
        $this->UserDocApprovals = TableRegistry::getTableLocator()->get('UserDocApprovals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserDocApprovals);

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
