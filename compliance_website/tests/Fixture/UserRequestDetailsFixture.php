<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserRequestDetailsFixture
 *
 */
class UserRequestDetailsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => '', 'comment' => '', 'precision' => null],
        'user_request_header_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'user_document_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'request_types' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'descriptions' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'user_request_details_ibfk_1' => ['type' => 'index', 'columns' => ['user_request_header_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'user_request_details_ibfk_1' => ['type' => 'foreign', 'columns' => ['user_request_header_id'], 'references' => ['user_request_headers', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'user_request_details_ibfk_2' => ['type' => 'foreign', 'columns' => ['id'], 'references' => ['user_documents', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
                'id' => '14154b74-9c88-4839-a52f-d0e8997c7d15',
                'user_request_header_id' => '0b00ef84-1320-4ba5-933c-b85f3a5ba635',
                'user_document_id' => 'b461882d-c080-4177-b079-5a0913410d37',
                'request_types' => 'Lorem ipsum dolor sit amet',
                'descriptions' => 'Lorem ipsum dolor sit amet',
                'created' => '2018-10-04 03:02:26',
                'modified' => '2018-10-04 03:02:26'
            ],
        ];
        parent::init();
    }
}
