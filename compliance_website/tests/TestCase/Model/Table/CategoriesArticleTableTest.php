<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoriesArticleTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoriesArticleTable Test Case
 */
class CategoriesArticleTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoriesArticleTable
     */
    public $CategoriesArticle;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.categories_article'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CategoriesArticle') ? [] : ['className' => CategoriesArticleTable::class];
        $this->CategoriesArticle = TableRegistry::getTableLocator()->get('CategoriesArticle', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CategoriesArticle);

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
