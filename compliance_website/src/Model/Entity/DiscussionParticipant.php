<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DiscussionParticipant Entity
 *
 * @property string $id
 * @property string $user_id
 * @property string $user_request_header_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\UserRequestHeader $user_request_header
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
        'user_id' => true,
        'user_request_header_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'user_request_header' => true
    ];
}
