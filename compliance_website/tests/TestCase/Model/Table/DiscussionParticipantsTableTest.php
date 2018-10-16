<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DiscussionParticipantsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DiscussionParticipantsTable Test Case
 */
class DiscussionParticipantsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DiscussionParticipantsTable
     */
    public $DiscussionParticipants;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.discussion_participants',
        'app.users',
        'app.user_request_headers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DiscussionParticipants') ? [] : ['className' => DiscussionParticipantsTable::class];
        $this->DiscussionParticipants = TableRegistry::getTableLocator()->get('DiscussionParticipants', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DiscussionParticipants);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
