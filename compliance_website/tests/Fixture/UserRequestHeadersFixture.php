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
        'doc_title' => ['type' => 'string', 'length' => 125, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'doc_no' => ['type' => 'string', 'length' => 125, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'reasons_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'status' => ['type' => 'string', 'fixed' => true, 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null],
        'request_dates' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'users_id' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'fk_reasons_id' => ['type' => 'index', 'columns' => ['reasons_id'], 'length' => []],
            'fk_user_doc_categories_ib' => ['type' => 'index', 'columns' => ['user_doc_category_id'], 'length' => []],
            'fk_user_doc_types' => ['type' => 'index', 'columns' => ['user_doc_type_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_reason_id' => ['type' => 'foreign', 'columns' => ['reasons_id'], 'references' => ['user_request_reasons', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'fk_user_doc_categories_ib' => ['type' => 'foreign', 'columns' => ['user_doc_category_id'], 'references' => ['user_doc_categories', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'fk_user_doc_types' => ['type' => 'foreign', 'columns' => ['user_doc_type_id'], 'references' => ['user_doc_types', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_users_id' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
                'id' => '659525a5-5c1c-4fa5-a5d1-2ef7919dba98',
                'user_doc_category_id' => '47752569-c819-4569-b521-8419822f7f26',
                'user_doc_type_id' => '339cfca9-e71a-48f1-a9a7-5e93a62a104c',
                'user_id' => 'Lorem ipsum dolor sit amet',
                'doc_title' => 'Lorem ipsum dolor sit amet',
                'doc_no' => 'Lorem ipsum dolor sit amet',
                'reasons_id' => '7097b93b-cb6e-4fce-bbf2-ca616ca0f66d',
                'status' => 'Lorem ip',
                'request_dates' => '2018-10-04 06:13:36',
                'created' => '2018-10-04 06:13:36',
                'modified' => '2018-10-04 06:13:36'
            ],
        ];
        parent::init();
    }
}
