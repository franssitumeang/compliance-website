<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SupportingFilesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SupportingFilesTable Test Case
 */
class SupportingFilesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SupportingFilesTable
     */
    public $SupportingFiles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.supporting_files',
        'app.archives'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SupportingFiles') ? [] : ['className' => SupportingFilesTable::class];
        $this->SupportingFiles = TableRegistry::getTableLocator()->get('SupportingFiles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SupportingFiles);

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
