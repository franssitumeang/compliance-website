<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArchiveTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArchiveTable Test Case
 */
class ArchiveTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ArchiveTable
     */
    public $Archive;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.archive'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Archive') ? [] : ['className' => ArchiveTable::class];
        $this->Archive = TableRegistry::getTableLocator()->get('Archive', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Archive);

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
