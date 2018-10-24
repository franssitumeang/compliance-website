<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArchivesSupportFileTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArchivesSupportFileTable Test Case
 */
class ArchivesSupportFileTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ArchivesSupportFileTable
     */
    public $ArchivesSupportFile;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.archives_support_file'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ArchivesSupportFile') ? [] : ['className' => ArchivesSupportFileTable::class];
        $this->ArchivesSupportFile = TableRegistry::getTableLocator()->get('ArchivesSupportFile', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ArchivesSupportFile);

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
