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
                'id' => '54d41305-12d9-47a3-af3b-6891177225d2',
                'name' => 'Lorem ipsum dolor sit amet',
                'doc_num' => 'e84c6508-5c46-4682-9913-d38b4b028829',
                'user_doc_categorie_id' => 'cda98c23-0232-458f-b3fb-0b2d9a661d19',
                'doc_types_id' => '4c5f7bd5-d6bc-4257-a6dd-90c1ba264ba4',
                'status' => 'Lorem ipsum dolor sit amet',
                'publisher_dates' => '2018-10-04 02:55:04',
                'paths' => 'Lorem ipsum dolor sit amet',
                'created' => '2018-10-04 02:55:04',
                'modified' => '2018-10-04 02:55:04'
            ],
        ];
        parent::init();
    }
}
