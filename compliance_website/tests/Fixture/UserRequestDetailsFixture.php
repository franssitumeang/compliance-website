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
                'id' => 'bf884930-7077-4120-9d34-da2b80bbea1c',
                'user_request_header_id' => '38b9a52f-34a1-4024-aadb-6eb6d08dbe29',
                'user_document_id' => '7300f48c-4cc5-4178-ad17-defb781af6b9',
                'request_types' => 'Lorem ipsum dolor sit amet',
                'descriptions' => 'Lorem ipsum dolor sit amet',
                'created' => '2018-10-04 02:36:48',
                'modified' => '2018-10-04 02:36:48'
            ],
        ];
        parent::init();
    }
}
