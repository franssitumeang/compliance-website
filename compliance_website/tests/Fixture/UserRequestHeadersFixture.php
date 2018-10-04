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
                'id' => '8ce6ca6f-125f-4fc2-a97c-84583cbd831f',
                'user_doc_category_id' => '7db83c5a-1f1e-4ca0-8704-80ded79da0d4',
                'user_doc_type_id' => 'debe9157-c9ba-4f22-bbf7-8db6fcc5578a',
                'user_id' => 'Lorem ipsum dolor sit amet',
                'reasons_id' => '8e9f3150-ff67-459d-857b-e20df31a319a',
                'attachment' => 'Lorem ipsum dolor sit amet',
                'approve_m' => 'Lorem ipsum d',
                'apprive_c' => 'Lorem ipsum d',
                'status' => 'Lorem ip',
                'request_dates' => '2018-10-04 03:02:28',
                'created' => '2018-10-04 03:02:28',
                'modified' => '2018-10-04 03:02:28'
            ],
        ];
        parent::init();
    }
}
