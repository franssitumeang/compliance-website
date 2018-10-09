<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserRequestHeadersFixture
 *
 */
class UserRequestHeadersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'user_doc_category_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'user_doc_type_id' => ['type' => 'uuid', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'user_id' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'user_request_reason_id' => ['type' => 'uuid', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'doc_title' => ['type' => 'string', 'length' => 125, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'doc_no' => ['type' => 'string', 'length' => 125, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'status' => ['type' => 'string', 'fixed' => true, 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'users_id' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'fk_user_doc_categories_ib' => ['type' => 'index', 'columns' => ['user_doc_category_id'], 'length' => []],
            'fk_user_doc_types' => ['type' => 'index', 'columns' => ['user_doc_type_id'], 'length' => []],
            'user_request_reason_id' => ['type' => 'index', 'columns' => ['user_request_reason_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_user_doc_categories_ib' => ['type' => 'foreign', 'columns' => ['user_doc_category_id'], 'references' => ['user_doc_categories', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'fk_user_doc_types' => ['type' => 'foreign', 'columns' => ['user_doc_type_id'], 'references' => ['user_doc_types', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'fk_users_id' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'user_request_headers_ibfk_1' => ['type' => 'foreign', 'columns' => ['user_request_reason_id'], 'references' => ['user_request_reasons', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
                'id' => 'e3089192-7765-4efb-ae83-4d67829b9933',
                'user_doc_category_id' => '89dfdf8d-5b63-433f-80a8-03a350f91b46',
                'user_doc_type_id' => '524da9b1-5739-48e3-9a75-8458d4b797ec',
                'user_id' => 'Lorem ipsum dolor sit amet',
                'user_request_reason_id' => '98ba2ada-839c-480a-a657-b45d260a63b5',
                'doc_title' => 'Lorem ipsum dolor sit amet',
                'doc_no' => 'Lorem ipsum dolor sit amet',
                'status' => 'Lorem ip',
                'created' => '2018-10-08 03:33:19',
                'modified' => '2018-10-08 03:33:19'
            ],
        ];
        parent::init();
    }
}
