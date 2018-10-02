<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VersionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VersionsTable Test Case
 */
class VersionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VersionsTable
     */
    public $Versions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.versions',
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
        $config = TableRegistry::getTableLocator()->exists('Versions') ? [] : ['className' => VersionsTable::class];
        $this->Versions = TableRegistry::getTableLocator()->get('Versions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Versions);

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
