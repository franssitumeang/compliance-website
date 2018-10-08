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
        'user_request_detail_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => '', 'comment' => '', 'precision' => null],
        'discussion_participant_id' => ['type' => 'uuid', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'user_request_details_id' => ['type' => 'index', 'columns' => ['user_request_detail_id'], 'length' => []],
            'discussion_participant_id' => ['type' => 'index', 'columns' => ['discussion_participant_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'discussions_ibfk_1' => ['type' => 'foreign', 'columns' => ['user_request_detail_id'], 'references' => ['user_request_details', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'discussions_ibfk_2' => ['type' => 'foreign', 'columns' => ['discussion_participant_id'], 'references' => ['discussion_participants', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'id' => '508b5e8b-6b99-4e39-805f-a2a8c081616e',
                'contents' => 'Lorem ipsum dolor sit amet',
                'user_request_detail_id' => 'e0fd522b-56fc-4560-b4ee-c7349773c775',
                'discussion_participant_id' => '26aa0239-d1ef-45ac-b97a-08b2be4b344d',
                'created' => '2018-10-05 04:49:35',
                'modified' => '2018-10-05 04:49:35'
            ],
        ];
        parent::init();
    }
}
