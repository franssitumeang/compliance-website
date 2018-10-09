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
        'status' => ['type' => 'string', 'fixed' => true, 'length' => 15, 'null' => false, 'default' => '\'REQUESTED\'', 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null],
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
                'id' => 'af810843-004d-44dd-829f-0d7f316b8720',
                'user_doc_category_id' => 'bc64bf8f-ddb1-4a89-b896-a6474e83432d',
                'user_doc_type_id' => '2346d1a9-454a-4688-9e20-371e5f9ef67c',
                'user_id' => 'Lorem ipsum dolor sit amet',
                'user_request_reason_id' => '68108c41-2900-460b-89ec-dbbe64dce9bb',
                'doc_title' => 'Lorem ipsum dolor sit amet',
                'doc_no' => 'Lorem ipsum dolor sit amet',
                'status' => 'Lorem ipsum d',
                'created' => '2018-10-09 06:19:29',
                'modified' => '2018-10-09 06:19:29'
            ],
        ];
        parent::init();
    }
}
