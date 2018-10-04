<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DiscussionParticipant Entity
 *
 * @property string $id
 * @property string $users_id
 * @property string $discussions_id
 * @property \Cake\I18n\FrozenTime $created
 * @property int $create_by
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $modi_by
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Discussion $discussion
 */
class DiscussionParticipant extends Entity
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
        'users_id' => true,
        'discussions_id' => true,
        'created' => true,
        'create_by' => true,
        'modified' => true,
        'modi_by' => true,
        'user' => true,
        'discussion' => true
    ];
}
