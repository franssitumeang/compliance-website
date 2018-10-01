<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompaniessTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompaniessTable Test Case
 */
class CompaniessTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CompaniessTable
     */
    public $Companiess;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.companiess'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Companiess') ? [] : ['className' => CompaniessTable::class];
        $this->Companiess = TableRegistry::getTableLocator()->get('Companiess', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Companiess);

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
