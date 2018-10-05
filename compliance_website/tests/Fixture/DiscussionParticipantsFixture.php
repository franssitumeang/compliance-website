<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DiscussionParticipantsFixture
 *
 */
class DiscussionParticipantsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'user_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'user_request_detail_id' => ['type' => 'uuid', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'discussion_participants_ibfk_1' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'user_request_detail_id' => ['type' => 'index', 'columns' => ['user_request_detail_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'discussion_participants_ibfk_1' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'discussion_participants_ibfk_2' => ['type' => 'foreign', 'columns' => ['user_request_detail_id'], 'references' => ['user_request_details', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
                'id' => '270e16f8-5bfc-47a3-be57-53558cba630f',
                'user_id' => 'b6010b33-b1d7-4b29-b161-8c2c09c89dac',
                'user_request_detail_id' => '3877d381-e85c-4063-95e0-47f4ef211ca1',
                'created' => '2018-10-05 04:50:18',
                'modified' => '2018-10-05 04:50:18'
            ],
        ];
        parent::init();
    }
}
