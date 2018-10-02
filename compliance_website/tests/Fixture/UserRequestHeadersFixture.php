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
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => '', 'comment' => '', 'precision' => null],
        'users_id' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'status' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'request_dates' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'reasons_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'users_id' => ['type' => 'index', 'columns' => ['users_id'], 'length' => []],
            'fk_reasons_id' => ['type' => 'index', 'columns' => ['reasons_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_reasons_id' => ['type' => 'foreign', 'columns' => ['reasons_id'], 'references' => ['reasons', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'fk_users_id' => ['type' => 'foreign', 'columns' => ['users_id'], 'references' => ['users', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
                'id' => '828d52e7-c840-4a9a-87e6-a4d8db2a42aa',
                'users_id' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'request_dates' => '2018-10-02 07:58:01',
                'reasons_id' => 'e120ef3c-a69a-4739-b090-52fc4b363c0d'
            ],
        ];
        parent::init();
    }
}
