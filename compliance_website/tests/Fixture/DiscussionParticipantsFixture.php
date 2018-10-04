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
                'id' => 'dbb4a4f2-e6ac-4475-ba4a-c48cab6a49a1',
                'user_id' => 'da9d840b-af2c-49cf-ad2f-4f1d3985ab65',
                'discussion_id' => '39c054a6-d5ad-4a57-8cb7-1186c911a388',
                'created' => '2018-10-04 02:54:47',
                'modified' => '2018-10-04 02:54:47'
            ],
        ];
        parent::init();
    }
}
