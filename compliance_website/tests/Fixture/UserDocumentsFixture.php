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
        'user_doc_category_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'user_doc_type_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'user_doc_detail_id' => ['type' => 'uuid', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'status' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'publisher_date' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'attachment' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'attachment_dir' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'attachment_type' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'user_doc_categories_id' => ['type' => 'index', 'columns' => ['user_doc_category_id'], 'length' => []],
            'doc_types_id' => ['type' => 'index', 'columns' => ['user_doc_type_id'], 'length' => []],
            'user_doc_detail_id' => ['type' => 'index', 'columns' => ['user_doc_detail_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_doc_types' => ['type' => 'foreign', 'columns' => ['user_doc_type_id'], 'references' => ['user_doc_types', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'fk_user_doc_categories' => ['type' => 'foreign', 'columns' => ['user_doc_category_id'], 'references' => ['user_doc_categories', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'user_documents_ibfk_1' => ['type' => 'foreign', 'columns' => ['user_doc_detail_id'], 'references' => ['user_request_details', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'id' => 'f9778c02-1a45-444a-acba-62edeb121e28',
                'name' => 'Lorem ipsum dolor sit amet',
                'doc_num' => '1c3be1af-3512-40b6-b0fd-ebf0d2eec640',
                'user_doc_category_id' => '547a1b44-e7c9-40d4-b251-cda253a7897a',
                'user_doc_type_id' => '0c12ff5d-b651-45fc-846d-7f942e3ed43e',
                'user_doc_detail_id' => 'ec5528ba-6ea1-4413-a35a-b3e5e9914931',
                'status' => 'Lorem ipsum dolor sit amet',
                'publisher_date' => '2018-10-08 02:41:37',
                'attachment' => 'Lorem ipsum dolor sit amet',
                'attachment_dir' => 'Lorem ipsum dolor sit amet',
                'attachment_type' => 'Lorem ipsum dolor sit amet',
                'created' => '2018-10-08 02:41:37',
                'modified' => '2018-10-08 02:41:37'
            ],
        ];
        parent::init();
    }
}
