<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property string $id
 * @property string $position_id
 * @property string $name
 * @property string $phone_num
 * @property string $password
 * @property string $email
 * @property string $department_id
 * @property bool $is_login
 * @property \Cake\I18n\FrozenTime $last_login
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Position $position
 * @property \App\Model\Entity\Department $department
 * @property \App\Model\Entity\DiscussionParticipant[] $discussion_participants
 * @property \App\Model\Entity\UserDocApproval[] $user_doc_approvals
 * @property \App\Model\Entity\UserRequestHeader[] $user_request_headers
 * @property \App\Model\Entity\Group[] $groups
 */
class User extends Entity
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
        'position_id' => true,
        'name' => true,
        'phone_num' => true,
        'password' => true,
        'email' => true,
        'department_id' => true,
        'is_login' => true,
        'last_login' => true,
        'created' => true,
        'modified' => true,
        'position' => true,
        'department' => true,
        'discussion_participants' => true,
        'user_doc_approvals' => true,
        'user_request_headers' => true,
        'groups' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];


    protected function _setPassword($value)
    {
        if (strlen($value)) {
            $hasher = new DefaultPasswordHasher();

            return $hasher->hash($value);
        }
    }
}
