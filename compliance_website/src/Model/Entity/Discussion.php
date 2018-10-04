<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Discussion Entity
 *
 * @property string $id
 * @property string $contents
 * @property \Cake\I18n\FrozenTime $created
 * @property int $create_by
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $modi_by
 * @property string $user_request_detail_id
 *
 * @property \App\Model\Entity\UserRequestDetail $user_request_detail
 * @property \App\Model\Entity\DiscussionParticipant[] $discussion_participants
 */
class Discussion extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'contents' => true,
        'created' => true,
        'create_by' => true,
        'modified' => true,
        'modi_by' => true,
        'user_request_detail_id' => true,
        'user_request_detail' => true,
        'discussion_participants' => true
    ];
}
