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
        'reasons_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'attachment' => ['type' => 'string', 'fixed' => true, 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null],
        'approve_m' => ['type' => 'string', 'fixed' => true, 'length' => 15, 'null' => true, 'default' => 'PENDING', 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null],
        'apprive_c' => ['type' => 'string', 'fixed' => true, 'length' => 15, 'null' => true, 'default' => 'PENDING', 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null],
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
                'id' => '0fd2ddbf-b837-4500-87de-f3550edcd098',
                'user_doc_category_id' => 'c7d83aa1-36e7-4e11-873c-f1ef4ebb9db9',
                'user_doc_type_id' => '6736c324-6dda-41c4-a02b-a1b9dadfb1cf',
                'user_id' => 'Lorem ipsum dolor sit amet',
                'reasons_id' => '772ed0f1-2283-47fc-af64-34c37e9114d7',
                'attachment' => 'Lorem ipsum dolor sit amet',
                'approve_m' => 'Lorem ipsum d',
                'apprive_c' => 'Lorem ipsum d',
                'status' => 'Lorem ip',
                'request_dates' => '2018-10-04 02:55:10',
                'created' => '2018-10-04 02:55:10',
                'modified' => '2018-10-04 02:55:10'
            ],
        ];
        parent::init();
    }
}
