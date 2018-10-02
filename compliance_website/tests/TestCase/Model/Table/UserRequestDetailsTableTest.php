<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserRequestDetailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserRequestDetailsTable Test Case
 */
class UserRequestDetailsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserRequestDetailsTable
     */
    public $UserRequestDetails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_request_details',
        'app.user_request_headers',
        'app.user_documents'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UserRequestDetails') ? [] : ['className' => UserRequestDetailsTable::class];
        $this->UserRequestDetails = TableRegistry::getTableLocator()->get('UserRequestDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserRequestDetails);

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
