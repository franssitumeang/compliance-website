<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserDocTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserDocTypesTable Test Case
 */
class UserDocTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserDocTypesTable
     */
    public $UserDocTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_doc_types',
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
        $config = TableRegistry::getTableLocator()->exists('UserDocTypes') ? [] : ['className' => UserDocTypesTable::class];
        $this->UserDocTypes = TableRegistry::getTableLocator()->get('UserDocTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserDocTypes);

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
