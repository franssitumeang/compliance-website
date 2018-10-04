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
        'doc_num' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'user_doc_categorie_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'doc_types_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'status' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'publisher_dates' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'paths' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'user_doc_categories_id' => ['type' => 'index', 'columns' => ['user_doc_categorie_id'], 'length' => []],
            'doc_types_id' => ['type' => 'index', 'columns' => ['doc_types_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_doc_types' => ['type' => 'foreign', 'columns' => ['doc_types_id'], 'references' => ['user_doc_types', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'fk_user_doc_categories' => ['type' => 'foreign', 'columns' => ['user_doc_categorie_id'], 'references' => ['user_doc_categories', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
                'id' => 'b097130b-415f-42c2-9338-b3b358ee1a58',
                'name' => 'Lorem ipsum dolor sit amet',
                'doc_num' => '254d848b-7cd5-44cf-8c9d-5aefbb23a03a',
                'user_doc_categorie_id' => 'dd91de10-1bbb-4159-bce0-5484767cf15f',
                'doc_types_id' => 'b8da544c-86c4-4a2b-9c44-5318fd141ce6',
                'status' => 'Lorem ipsum dolor sit amet',
                'publisher_dates' => '2018-10-04 03:02:22',
                'paths' => 'Lorem ipsum dolor sit amet',
                'created' => '2018-10-04 03:02:22',
                'modified' => '2018-10-04 03:02:22'
            ],
        ];
        parent::init();
    }
}
