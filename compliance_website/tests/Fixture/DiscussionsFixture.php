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
        'user_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'user_request_detail_id' => ['type' => 'uuid', 'length' => null, 'null' => true, 'default' => '', 'comment' => '', 'precision' => null],
        'disicussion_participant_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'discussion_participant_id' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'user_id' => ['type' => 'index', 'columns' => ['user_id', 'disicussion_participant_id'], 'length' => []],
            'disicussion_participant_id' => ['type' => 'index', 'columns' => ['disicussion_participant_id'], 'length' => []],
            'user_request_detail_id' => ['type' => 'index', 'columns' => ['user_request_detail_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'discussions_ibfk_3' => ['type' => 'foreign', 'columns' => ['disicussion_participant_id'], 'references' => ['discussion_participants', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'discussions_ibfk_4' => ['type' => 'foreign', 'columns' => ['user_request_detail_id'], 'references' => ['user_request_details', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
                'id' => '08e0b8c7-26ec-481f-bf6d-43b1b125d3d3',
                'contents' => 'Lorem ipsum dolor sit amet',
                'user_id' => '900fcdd0-96db-4620-9eed-5326c59615d0',
                'user_request_detail_id' => '0a7d8f0e-ff72-4aff-954b-cda2d2edf64d',
                'disicussion_participant_id' => '8816b6bd-b891-4f06-955e-9fcdfca1bf1c',
                'created' => '2018-10-15 08:43:25',
                'modified' => '2018-10-15 08:43:25'
            ],
        ];
        parent::init();
    }
}
