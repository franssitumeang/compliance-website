<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArchivesFixture
 *
 */
class ArchivesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'historical_revision_number' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'doc_number' => ['type' => 'string', 'length' => 36, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'doc_name' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'process_owner' => ['type' => 'string', 'length' => 36, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'revision_date' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'archive_category_id' => ['type' => 'string', 'length' => 36, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'support_file' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'archives_ibfk_1' => ['type' => 'index', 'columns' => ['archive_category_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'archives_ibfk_1' => ['type' => 'foreign', 'columns' => ['archive_category_id'], 'references' => ['archive_categories', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
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
                'id' => 'e063791a-e98c-40bc-9b37-eadbc25e27bc',
                'historical_revision_number' => 'Lorem ipsum dolor sit amet',
                'doc_number' => 'Lorem ipsum dolor sit amet',
                'doc_name' => 'Lorem ipsum dolor sit amet',
                'process_owner' => 'Lorem ipsum dolor sit amet',
                'revision_date' => '2018-10-23',
                'archive_category_id' => 'Lorem ipsum dolor sit amet',
                'support_file' => 'Lorem ipsum dolor sit amet',
                'created' => '2018-10-23 02:52:31',
                'modified' => '2018-10-23 02:52:31'
            ],
        ];
        parent::init();
    }
}
