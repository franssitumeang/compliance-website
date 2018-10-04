<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VersionsFixture
 *
 */
class VersionsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'user_document_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'version' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'obsolute' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'user_documents_id' => ['type' => 'index', 'columns' => ['user_document_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_user_documents_id' => ['type' => 'foreign', 'columns' => ['user_document_id'], 'references' => ['user_documents', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
                'id' => 'dd696d5c-e748-4c88-b22d-7e53c6fe71e9',
                'user_document_id' => 'f3c94639-837a-43f4-9647-265e780bd395',
                'version' => 1,
                'created' => '2018-10-04 06:13:41',
                'modified' => '2018-10-04 06:13:41',
                'obsolute' => 1
            ],
        ];
        parent::init();
    }
}
