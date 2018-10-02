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
        'users_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'discussions_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'create_by' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modi_by' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'discussion_participants_ibfk_1' => ['type' => 'index', 'columns' => ['users_id'], 'length' => []],
            'discussion_participants_ibfk_2' => ['type' => 'index', 'columns' => ['discussions_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'discussion_participants_ibfk_1' => ['type' => 'foreign', 'columns' => ['users_id'], 'references' => ['users', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'discussion_participants_ibfk_2' => ['type' => 'foreign', 'columns' => ['discussions_id'], 'references' => ['discussions', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
                'id' => '428f61c2-bbda-4b5f-8b7f-4ed1d6976e0b',
                'users_id' => 'a1b23623-adb0-46fb-ba32-22a2143ed52d',
                'discussions_id' => 'aae01961-c2f9-4d85-a781-06e0ebd58ff3',
                'created' => '2018-10-02 08:04:28',
                'create_by' => 1,
                'modified' => '2018-10-02 08:04:28',
                'modi_by' => 1
            ],
        ];
        parent::init();
    }
}
