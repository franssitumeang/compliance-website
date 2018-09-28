<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RolesFixture
 *
 */
class RolesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => '', 'comment' => '', 'precision' => null],
        'menu_id' => ['type' => 'uuid', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'user_group_id' => ['type' => 'uuid', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'menu_id' => ['type' => 'index', 'columns' => ['menu_id'], 'length' => []],
            'user_group_id' => ['type' => 'index', 'columns' => ['user_group_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_menu' => ['type' => 'foreign', 'columns' => ['menu_id'], 'references' => ['menus', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'fk_user_group' => ['type' => 'foreign', 'columns' => ['user_group_id'], 'references' => ['user_groups', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
                'id' => '4c405c39-27e1-44f5-aae0-4065c7adb0ca',
                'menu_id' => '3d11c855-73ab-49b5-8338-605c1aa86cf4',
                'user_group_id' => '91a477c4-43f2-4505-9360-02e1c19d5c41',
                'created' => '2018-09-28 09:03:13',
                'modified' => '2018-09-28 09:03:13'
            ],
        ];
        parent::init();
    }
}
