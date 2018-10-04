<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserDocCategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserDocCategoriesTable Test Case
 */
class UserDocCategoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserDocCategoriesTable
     */
    public $UserDocCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_doc_categories',
        'app.user_documents',
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
        $config = TableRegistry::getTableLocator()->exists('UserDocCategories') ? [] : ['className' => UserDocCategoriesTable::class];
        $this->UserDocCategories = TableRegistry::getTableLocator()->get('UserDocCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserDocCategories);

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
