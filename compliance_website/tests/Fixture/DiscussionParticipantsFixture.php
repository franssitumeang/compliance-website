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
        'discussion_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'discussion_participants_ibfk_1' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'discussion_participants_ibfk_2' => ['type' => 'index', 'columns' => ['discussion_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'discussion_participants_ibfk_1' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'discussion_participants_ibfk_2' => ['type' => 'foreign', 'columns' => ['discussion_id'], 'references' => ['discussions', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
                'id' => '2005fc49-969f-4633-a97a-bb878689fe4d',
                'user_id' => 'f2c75bd6-83d4-4ac4-bc1b-39e5c2016bad',
                'discussion_id' => '7c91a8ea-e9f8-4250-8acb-c498a4af86da',
                'created' => '2018-10-04 06:13:19',
                'modified' => '2018-10-04 06:13:19'
            ],
        ];
        parent::init();
    }
}
