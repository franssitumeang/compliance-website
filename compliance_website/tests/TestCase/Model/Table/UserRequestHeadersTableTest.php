<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserRequestHeadersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserRequestHeadersTable Test Case
 */
class UserRequestHeadersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserRequestHeadersTable
     */
    public $UserRequestHeaders;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_request_headers',
        'app.user_doc_categories',
        'app.user_doc_types',
        'app.users',
        'app.reasons',
        'app.user_doc_approvals',
        'app.user_request_details'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UserRequestHeaders') ? [] : ['className' => UserRequestHeadersTable::class];
        $this->UserRequestHeaders = TableRegistry::getTableLocator()->get('UserRequestHeaders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserRequestHeaders);

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
