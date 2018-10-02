<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DiscussionsFixture
 *
 */
class DiscussionsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => '', 'comment' => '', 'precision' => null],
        'contents' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'create_by' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modi_by' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'user_request_details_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => '', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'user_request_details_id' => ['type' => 'index', 'columns' => ['user_request_details_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'discussions_ibfk_1' => ['type' => 'foreign', 'columns' => ['user_request_details_id'], 'references' => ['user_request_details', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
                'id' => '44720ff6-ff08-4d06-b655-085667f26b02',
                'contents' => 'Lorem ipsum dolor sit amet',
                'created' => '2018-10-02 08:03:52',
                'create_by' => 1,
                'modified' => '2018-10-02 08:03:52',
                'modi_by' => 1,
                'user_request_details_id' => 'fd44877c-0638-4192-88cc-cb833b7ca954'
            ],
        ];
        parent::init();
    }
}
