<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArticlesFixture
 *
 */
class ArticlesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => '', 'comment' => '', 'precision' => null],
        'title' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'description' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'user_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'categories_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'attachment' => ['type' => 'string', 'length' => 225, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'user_id' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'categories_id' => ['type' => 'index', 'columns' => ['categories_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_categories_id' => ['type' => 'foreign', 'columns' => ['categories_id'], 'references' => ['article_categories', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'fk_user_id' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 'a94ed2a6-ca28-4dda-b095-4db975353e33',
                'title' => 'Lorem ipsum dolor sit amet',
                'created' => '2018-10-04 06:13:13',
                'description' => 'Lorem ipsum dolor sit amet',
                'user_id' => 'ec74b736-88c5-42ec-b493-2a7cb9859730',
                'categories_id' => '404bfb07-41c8-4d6e-9c2c-d5e91dc57aa1',
                'attachment' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
