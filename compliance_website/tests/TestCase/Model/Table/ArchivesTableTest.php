<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArchivesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArchivesTable Test Case
 */
class ArchivesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ArchivesTable
     */
    public $Archives;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.archives',
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
        $config = TableRegistry::getTableLocator()->exists('Archives') ? [] : ['className' => ArchivesTable::class];
        $this->Archives = TableRegistry::getTableLocator()->get('Archives', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Archives);

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
