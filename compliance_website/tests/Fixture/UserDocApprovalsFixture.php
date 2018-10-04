<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserDocApprovalsFixture
 *
 */
class UserDocApprovalsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'user_id' => ['type' => 'uuid', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'user_request_header_id' => ['type' => 'uuid', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'status' => ['type' => 'string', 'fixed' => true, 'length' => 15, 'null' => false, 'default' => 'PENDING', 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'user_id' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'user_request_header_id' => ['type' => 'index', 'columns' => ['user_request_header_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'user_doc_approvals_ibfk_1' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'user_doc_approvals_ibfk_2' => ['type' => 'foreign', 'columns' => ['user_request_header_id'], 'references' => ['user_request_headers', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
                'id' => '7103bba9-2e27-4d41-b38e-461cf6049713',
                'user_id' => '420e54dd-f489-4e57-9e7a-bdbd48268305',
                'user_request_header_id' => '74c1a255-8832-42a1-a145-aa9cdc0c9581',
                'status' => 'Lorem ipsum d',
                'created' => '2018-10-04 06:13:27',
                'modified' => '2018-10-04 06:13:27'
            ],
        ];
        parent::init();
    }
}
