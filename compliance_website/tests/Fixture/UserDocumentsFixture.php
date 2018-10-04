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
        'paths' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
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
                'id' => '341c21a0-f193-48b6-86e8-eceb76e3ded6',
                'name' => 'Lorem ipsum dolor sit amet',
                'doc_num' => '412d7e2e-79ff-4ae2-97f3-b7d8032e7c44',
                'user_doc_category_id' => '229ac803-ab14-40b4-aa7c-4a8c1b08368d',
                'user_doc_type_id' => '4c2ac9ff-b940-4415-9ee5-fefbe0869899',
                'user_doc_detail_id' => '99778f02-dd6c-4f9a-b2f5-42ea42d37b26',
                'status' => 'Lorem ipsum dolor sit amet',
                'publisher_date' => '2018-10-04 06:13:31',
                'paths' => 'Lorem ipsum dolor sit amet',
                'created' => '2018-10-04 06:13:31',
                'modified' => '2018-10-04 06:13:31'
            ],
        ];
        parent::init();
    }
}
