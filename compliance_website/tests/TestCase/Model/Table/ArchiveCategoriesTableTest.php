<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArchiveCategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArchiveCategoriesTable Test Case
 */
class ArchiveCategoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ArchiveCategoriesTable
     */
    public $ArchiveCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.archive_categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ArchiveCategories') ? [] : ['className' => ArchiveCategoriesTable::class];
        $this->ArchiveCategories = TableRegistry::getTableLocator()->get('ArchiveCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ArchiveCategories);

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
