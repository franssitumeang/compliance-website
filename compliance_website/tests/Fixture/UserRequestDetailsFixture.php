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
        'approve_m' => ['type' => 'string', 'fixed' => true, 'length' => 15, 'null' => true, 'default' => '\'PENDING\'', 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null],
        'approve_c' => ['type' => 'string', 'fixed' => true, 'length' => 15, 'null' => true, 'default' => '\'PENDING\'', 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null],
        'request_types' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'descriptions' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'attachment' => ['type' => 'upload.file', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'attachment_dir' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'attachment_type' => ['type' => 'string', 'length' => 5, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'user_request_details_ibfk_1' => ['type' => 'index', 'columns' => ['user_request_header_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'user_request_details_ibfk_1' => ['type' => 'foreign', 'columns' => ['user_request_header_id'], 'references' => ['user_request_headers', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
                'id' => '1de02793-c0c9-42c2-8b8f-791e6e5ad13d',
                'user_request_header_id' => '5b411862-5afc-41b8-9805-a7f99fd1d3fb',
                'approve_m' => 'Lorem ipsum d',
                'approve_c' => 'Lorem ipsum d',
                'request_types' => 'Lorem ipsum dolor sit amet',
                'descriptions' => 'Lorem ipsum dolor sit amet',
                'attachment' => '',
                'attachment_dir' => 'Lorem ipsum dolor sit amet',
                'attachment_type' => 'Lor',
                'created' => '2018-10-08 10:25:45',
                'modified' => '2018-10-08 10:25:45'
            ],
        ];
        parent::init();
    }
}
