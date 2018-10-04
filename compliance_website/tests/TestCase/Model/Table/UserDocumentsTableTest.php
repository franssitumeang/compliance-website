<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserDocumentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserDocumentsTable Test Case
 */
class UserDocumentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserDocumentsTable
     */
    public $UserDocuments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_documents',
        'app.user_doc_categories',
        'app.doc_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UserDocuments') ? [] : ['className' => UserDocumentsTable::class];
        $this->UserDocuments = TableRegistry::getTableLocator()->get('UserDocuments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserDocuments);

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
