<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DocTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DocTypesTable Test Case
 */
class DocTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DocTypesTable
     */
    public $DocTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::getTableLocator()->exists('DocTypes') ? [] : ['className' => DocTypesTable::class];
        $this->DocTypes = TableRegistry::getTableLocator()->get('DocTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DocTypes);

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
