<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserDocumentsFixture
 *
 */
class UserDocumentsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'name' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'no_docs' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'user_doc_categories_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'doc_types_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'status' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'publisher_dates' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'paths' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'user_doc_categories_id' => ['type' => 'index', 'columns' => ['user_doc_categories_id'], 'length' => []],
            'doc_types_id' => ['type' => 'index', 'columns' => ['doc_types_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_doc_types' => ['type' => 'foreign', 'columns' => ['doc_types_id'], 'references' => ['doc_types', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'fk_user_doc_categories' => ['type' => 'foreign', 'columns' => ['user_doc_categories_id'], 'references' => ['user_doc_categories', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
                'id' => '53b6ae98-7a6f-4841-83af-69b81ef151f9',
                'name' => 'Lorem ipsum dolor sit amet',
                'no_docs' => 'da51ba35-853b-40b2-a96d-fdf1cfc44463',
                'user_doc_categories_id' => '863d1b78-4db6-418b-80c2-5e2b1a8773b3',
                'doc_types_id' => 'e45cac01-fcf1-4bdb-aa28-6790dc882741',
                'status' => 'Lorem ipsum dolor sit amet',
                'publisher_dates' => '2018-10-02 08:02:39',
                'paths' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
